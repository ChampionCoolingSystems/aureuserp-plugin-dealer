<?php

namespace ChampionCoolingSystems\Dealer\Filament\Resources\Dealers\Pages;

use ChampionCoolingSystems\Dealer\Filament\Resources\Dealers\DealerResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewDealer extends ViewRecord
{
    protected static string $resource = DealerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
