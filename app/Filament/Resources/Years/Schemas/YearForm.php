<?php

namespace App\Filament\Resources\Years\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class YearForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('year_label')
                    ->required(),
                DatePicker::make('start_date'),
                DatePicker::make('end_date'),
                Select::make('status')
                    ->options(['Active' => 'Active', 'Closed' => 'Closed'])
                    ->default('Active')
                    ->required(),
            ]);
    }
}
