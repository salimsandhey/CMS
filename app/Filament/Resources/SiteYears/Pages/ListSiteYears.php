<?php

namespace App\Filament\Resources\SiteYears\Pages;

use App\Filament\Resources\SiteYears\SiteYearResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSiteYears extends ListRecords
{
    protected static string $resource = SiteYearResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
