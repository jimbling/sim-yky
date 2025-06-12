<?php

namespace App\Filament\Resources;

use App\Models\Sim;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SimResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SimResource\RelationManagers;

class SimResource extends Resource
{
    protected static ?string $model = Sim::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')
                ->label('Nama SIM')
                ->required()
                ->maxLength(255),

            Textarea::make('description')
                ->label('Deskripsi')
                ->rows(3)
                ->maxLength(500)
                ->nullable(),

            TextInput::make('url')
                ->label('URL')
                ->required()
                ->url(),

            FileUpload::make('icon')
                ->label('Ikon')
                ->image()
                ->nullable(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Nama SIM')->searchable()
                    ->visibleFrom('md'),
                TextColumn::make('description')->label('Deskripsi')->limit(50),
                TextColumn::make('url')
                    ->label('URL')
                    ->url(fn($record) => $record->url)
                    ->openUrlInNewTab(), // Opsional
                ImageColumn::make('icon')->label('Ikon')->size(50),

            ])

            ->filters([
                //
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
            'index' => Pages\ListSims::route('/'),
            'create' => Pages\CreateSim::route('/create'),
            'edit' => Pages\EditSim::route('/{record}/edit'),
        ];
    }
}
