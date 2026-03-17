<?php

namespace ChampionCoolingSystems\Dealer\Filament\Resources\Dealers\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Group;
use Filament\Infolists\Components\TextEntry;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

class DealerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Group::make()
                    ->schema([
                        Group::make()
                            ->schema([
                                Group::make()
                                    ->schema([
                                        Section::make('Dealer Information')
                                            ->schema([
                                                TextInput::make('name')
                                                    ->label(__('Name'))
                                                    ->required()
                                                    ->maxLength(255),
                                            ])
                                            ->collapsible(),
                                    ])
                                    ->columnSpan(['lg' => 8]),
                                Group::make()
                                    ->schema([
                                        Section::make('Administrative')
                                            ->schema([
                                                Toggle::make('active')->label('Active'),
                                            ])
                                            ->collapsible(),
                                        Section::make('Metadata')
                                            ->schema([
                                                TextEntry::make('created_at')
                                                    ->dateTime(),
                                                TextEntry::make('updated_at')
                                                    ->dateTime(),
                                                TextEntry::make('deleted_at')
                                                    ->dateTime(),
                                            ])
                                            ->collapsible()
                                            ->collapsed(),
                                    ])
                                    ->columnSpan(['lg' => 4]),
                            ])
                            ->columns(12),
                    ])
                    ->columnSpanFull()
            ]);
    }
}
