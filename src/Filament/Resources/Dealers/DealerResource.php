<?php

namespace ChampionCoolingSystems\Dealer\Filament\Resources\Dealers;

use ChampionCoolingSystems\Dealer\Filament\Resources\Dealers\Pages\CreateDealer;
use ChampionCoolingSystems\Dealer\Filament\Resources\Dealers\Pages\EditDealer;
use ChampionCoolingSystems\Dealer\Filament\Resources\Dealers\Pages\ListDealers;
use ChampionCoolingSystems\Dealer\Filament\Resources\Dealers\Pages\ViewDealer;
use ChampionCoolingSystems\Dealer\Filament\Resources\Dealers\Schemas\DealerForm;
use ChampionCoolingSystems\Dealer\Filament\Resources\Dealers\Schemas\DealerInfolist;
use ChampionCoolingSystems\Dealer\Filament\Resources\Dealers\Tables\DealersTable;
use ChampionCoolingSystems\Dealer\Models\Dealer;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Support\Icons\Heroicon;
use BackedEnum;

class DealerResource extends Resource
{
    protected static ?string $model = Dealer::class;

    protected static ?string $recordTitleAttribute = 'Dealers';

    protected static BackedEnum|string|null $navigationIcon = Heroicon::OutlinedUserGroup;

    public static function getNavigationLabel(): string
    {
        return __('Dealers');
    }

    public static function getNavigationGroup(): string
    {
        return __('Dealers');
    }

    public static function form(Schema $schema): Schema
    {
        return DealerForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return DealerInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DealersTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListDealers::route('/'),
            'create' => CreateDealer::route('/create'),
            'view' => ViewDealer::route('/{record}'),
            'edit' => EditDealer::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
