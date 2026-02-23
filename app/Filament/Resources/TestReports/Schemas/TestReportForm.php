<?php

namespace App\Filament\Resources\TestReports\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TestReportForm
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
                    ->multiple()
                    ->directory('test-reports')
                    ->required(),
                Textarea::make('customer_feedback')
                    ->label('Customer Feedback')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
