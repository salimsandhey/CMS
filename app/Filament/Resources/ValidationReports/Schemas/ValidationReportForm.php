<?php

namespace App\Filament\Resources\ValidationReports\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ValidationReportForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('site_year_id')
                    ->relationship('siteYear', 'id')
                    ->getOptionLabelFromRecordUsing(fn ($record) => $record->site->site_name . ' - ' . $record->year->year_label)
                    ->required(),
                TextInput::make('report_title')
                    ->required(),
                DatePicker::make('report_date'),
                FileUpload::make('file_path')
                    ->acceptedFileTypes(['application/pdf'])
                    ->directory('validation-reports')
                    ->required(),
                Textarea::make('remarks')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('customer_feedback')
                    ->label('Customer Feedback')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
