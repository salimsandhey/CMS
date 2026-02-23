<?php

namespace App\Filament\Resources\SiteYears\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SiteYearForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('site_id')
                    ->relationship('site', 'site_name')
                    ->required(),
                Select::make('year_id')
                    ->relationship('year', 'year_label')
                    ->required(),
                DatePicker::make('amc_start_date'),
                DatePicker::make('amc_expiry_date'),
                Textarea::make('remarks')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
