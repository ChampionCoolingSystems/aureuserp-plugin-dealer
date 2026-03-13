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
                                        Section::make('Profile')
                                            ->schema([
                                                TextInput::make('firstname')
                                                    ->label(__('First Name'))
                                                    ->required()
                                                    ->maxLength(255),
                                                TextInput::make('lastname')
                                                    ->label(__('Last Name'))
                                                    ->required()
                                                    ->maxLength(255),
                                                TextInput::make('email')
                                                    ->label(__('Email'))
                                                    ->required()
                                                    ->email(),
                                                TextInput::make('phone')
                                                    ->label(__('Phone Number'))
                                                    ->required()
                                                    ->tel(),
                                                TextInput::make('fax')
                                                    ->label(__('Fax Number'))
                                                    ->tel(),
                                            ])
                                            ->collapsible(),
                                        Section::make('Address')
                                            ->schema([
                                                TextInput::make('company_name')->label('Company Name'),
                                                TextInput::make('address')->label('Address'),
                                                TextInput::make('city')->label('City'),
                                                TextInput::make('state')->label('State'),
                                                TextInput::make('postcode')->label('Postcode'),
                                                TextInput::make('country')->label('Country'),
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
