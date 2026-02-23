<?php

namespace App\Filament\Resources\ValidationReports\Pages;

use App\Filament\Resources\ValidationReports\ValidationReportResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditValidationReport extends EditRecord
{
    protected static string $resource = ValidationReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
