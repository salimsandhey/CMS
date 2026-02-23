<?php

namespace App\Filament\Resources\TestReports\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TestReportsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('siteYear.site.site_name')
                    ->label('Site')
                    ->sortable(),
                TextColumn::make('report_title')
                    ->searchable(),
                TextColumn::make('report_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('file_path')
                    ->label('Attached Files')
                    ->formatStateUsing(fn ($state) => count((array) $state) . ' file(s)'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
