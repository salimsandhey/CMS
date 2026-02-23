<?php

namespace App\Filament\Resources\ValidationReports;

use App\Filament\Resources\ValidationReports\Pages\CreateValidationReport;
use App\Filament\Resources\ValidationReports\Pages\EditValidationReport;
use App\Filament\Resources\ValidationReports\Pages\ListValidationReports;
use App\Filament\Resources\ValidationReports\Schemas\ValidationReportForm;
use App\Filament\Resources\ValidationReports\Tables\ValidationReportsTable;
use App\Models\ValidationReport;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ValidationReportResource extends Resource
{
    protected static ?string $model = ValidationReport::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ValidationReportForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ValidationReportsTable::configure($table);
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
            'index' => ListValidationReports::route('/'),
            'create' => CreateValidationReport::route('/create'),
            'edit' => EditValidationReport::route('/{record}/edit'),
        ];
    }
}
