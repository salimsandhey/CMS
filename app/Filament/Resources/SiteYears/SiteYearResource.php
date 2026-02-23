<?php

namespace App\Filament\Resources\SiteYears;

use App\Filament\Resources\SiteYears\Pages\CreateSiteYear;
use App\Filament\Resources\SiteYears\Pages\EditSiteYear;
use App\Filament\Resources\SiteYears\Pages\ListSiteYears;
use App\Filament\Resources\SiteYears\Schemas\SiteYearForm;
use App\Filament\Resources\SiteYears\Tables\SiteYearsTable;
use App\Models\SiteYear;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SiteYearResource extends Resource
{
    protected static ?string $model = SiteYear::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return SiteYearForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SiteYearsTable::configure($table);
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
            'index' => ListSiteYears::route('/'),
            'create' => CreateSiteYear::route('/create'),
            'edit' => EditSiteYear::route('/{record}/edit'),
        ];
    }
}
