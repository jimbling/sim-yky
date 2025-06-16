<?php

namespace App\Filament\Resources\PatchResource\RelationManagers;

use Filament\Resources\RelationManagers\RelationManager;

use Filament\Tables\Table;
use Filament\Tables\Columns\{TextColumn, BadgeColumn};

class DistributionsRelationManager extends RelationManager
{
    protected static string $relationship = 'distributions';

    public function table(Table $table): Table

    {
        return $table
            ->columns([
                TextColumn::make('school.name')->label('Sekolah'),
                BadgeColumn::make('status')
                    ->colors([
                        'primary' => 'pending',
                        'success' => 'applied',
                        'danger' => 'failed',
                    ]),
                TextColumn::make('applied_at')->dateTime()->label('Diterapkan Pada'),
            ]);
    }
}
