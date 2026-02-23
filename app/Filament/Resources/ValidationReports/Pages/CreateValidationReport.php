<?php

namespace App\Filament\Resources\ValidationReports\Pages;

use App\Filament\Resources\ValidationReports\ValidationReportResource;
use Filament\Resources\Pages\CreateRecord;

class CreateValidationReport extends CreateRecord
{
    protected static string $resource = ValidationReportResource::class;
}
