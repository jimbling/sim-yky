<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use App\Models\SchoolRegistrationToken;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SchoolRegistrationTokenResource\Pages;
use App\Filament\Resources\SchoolRegistrationTokenResource\RelationManagers;

class SchoolRegistrationTokenResource extends Resource
{
    protected static ?string $model = SchoolRegistrationToken::class;

    protected static ?string $navigationGroup = 'Token';
    protected static ?string $navigationIcon = 'heroicon-o-key';
    protected static ?string $modelLabel = 'Registrasi Sekolah';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('token')
                    ->label('Token')
                    ->default('SINAU-' . strtoupper(Str::random(8)))
                    ->extraAttributes(['readonly' => true, 'id' => 'token-input'])
                    ->suffixAction(
                        Forms\Components\Actions\Action::make('copy')
                            ->icon('heroicon-o-clipboard')
                            ->label('Salin')
                            ->extraAttributes(['onclick' => "navigator.clipboard.writeText(document.getElementById('token-input').value).then(() => alert('Token berhasil disalin!'))"])
                    )
                    ->disabled()
                    ->dehydrated(),


                Forms\Components\TextInput::make('school_uuid')
                    ->label('UUID Sekolah')
                    ->default((string) Str::uuid()) // fix: tambahkan cast ke string
                    ->disabled()
                    ->dehydrated(),
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\TextInput::make('npsn'),
                Forms\Components\TextInput::make('email'),
                Forms\Components\Textarea::make('address'),
                Forms\Components\Select::make('status')
                    ->options([
                        'active' => 'Active',
                        'expired' => 'Expired',
                        'used' => 'Used',
                    ])->default('active'),
                Forms\Components\DatePicker::make('valid_until'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('token')
                    ->label('Token')
                    ->searchable()
                    ->copyable()
                    ->copyMessage('Token telah disalin ke clipboard!'),

                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Sekolah')
                    ->searchable(),

                Tables\Columns\TextColumn::make('npsn'),

                Tables\Columns\TextColumn::make('domain') // 🆕 Domain sekolah
                    ->label('Domain')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('activated_at') // 🆕 Tanggal aktivasi
                    ->label('Aktif Sejak')
                    ->dateTime('d M Y H:i')
                    ->sortable(),

                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn($state) => match ($state) {
                        'active' => 'success',
                        'used' => 'warning',
                        'expired' => 'danger',
                    }),

                Tables\Columns\TextColumn::make('valid_until')
                    ->label('Berlaku Sampai')
                    ->date(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->since(),
            ])
            ->filters([
                // kamu bisa tambahkan filter jika perlu
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }


    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSchoolRegistrationTokens::route('/'),
            'create' => Pages\CreateSchoolRegistrationToken::route('/create'),
            'edit' => Pages\EditSchoolRegistrationToken::route('/{record}/edit'),
        ];
    }
}
