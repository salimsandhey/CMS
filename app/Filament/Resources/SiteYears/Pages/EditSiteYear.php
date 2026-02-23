<?php

namespace App\Filament\Resources\SiteYears\Pages;

use App\Filament\Resources\SiteYears\SiteYearResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSiteYear extends EditRecord
{
    protected static string $resource = SiteYearResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
