<?php

namespace App\Filament\Resources\ValidationReports\Pages;

use App\Filament\Resources\ValidationReports\ValidationReportResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListValidationReports extends ListRecords
{
    protected static string $resource = ValidationReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
