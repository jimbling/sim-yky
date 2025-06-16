<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Patch;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Toggle;
use App\Models\SchoolRegistrationToken;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\CheckboxList;
use App\Filament\Resources\PatchResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PatchResource\RelationManagers;
use PatchResource\RelationManagers\DistributionsRelationManager;

class PatchResource extends Resource
{
    protected static ?string $model = Patch::class;



    // protected static ?string $navigationGroup = 'Manajemen Update';
    protected static ?string $navigationIcon = 'heroicon-o-arrow-up-tray';
    protected static ?string $modelLabel = 'Patch Update';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required()->maxLength(255),
                TextInput::make('version')->required()->maxLength(50),
                Textarea::make('description')->rows(3),
                FileUpload::make('file_path')
                    ->label('Patch File (.zip)')
                    ->disk('public')
                    ->directory('patches')
                    ->acceptedFileTypes([
                        '.zip',
                        'application/zip',
                        'application/x-zip-compressed',
                        'multipart/x-zip',
                        'application/octet-stream', // kadang digunakan browser tertentu
                    ])
                    ->maxSize(10240) // ukuran maksimal dalam KB (misal 10MB)
                    ->required()
                    ->visibility('private'),

                Toggle::make('is_public')
                    ->label('Untuk Semua Sekolah?')
                    ->default(true)
                    ->reactive(), // <-- wajib

                CheckboxList::make('target_schools')
                    ->label('Pilih Sekolah (jika tidak publik)')
                    ->options(
                        fn() => SchoolRegistrationToken::where('status', 'used')->pluck('name', 'id')->toArray()
                    )
                    ->visible(fn(callable $get) => !$get('is_public'))
                    ->columns(2),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('version')->sortable(),
                BadgeColumn::make('status')
                    ->label('Status')
                    ->formatStateUsing(fn(string $state): string => match ($state) {
                        'pending' => 'Menunggu',
                        'applied' => 'Sudah Diterapkan',
                        'failed' => 'Gagal',
                        default => ucfirst($state),
                    })
                    ->color(fn(string $state): string => match ($state) {
                        'pending' => 'gray',
                        'applied' => 'success',
                        'failed' => 'danger',
                        default => 'gray',
                    }),

                TextColumn::make('created_at')->dateTime()->label('Tanggal Upload'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            PatchResource\RelationManagers\DistributionsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPatches::route('/'),
            'create' => Pages\CreatePatch::route('/create'),
            'edit' => Pages\EditPatch::route('/{record}/edit'),
        ];
    }
}
