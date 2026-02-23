<?php

namespace App\Filament\Resources\SiteImages\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class SiteImageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('site_year_id')
                    ->relationship('siteYear', 'id')
                    ->getOptionLabelFromRecordUsing(fn ($record) => $record->site->site_name . ' - ' . $record->year->year_label)
                    ->required(),
                FileUpload::make('file_path')
                    ->image()
                    ->multiple()
                    ->directory('site-images')
                    ->required(),
                TextInput::make('caption')
                    ->default(null),
            ]);
    }
}
