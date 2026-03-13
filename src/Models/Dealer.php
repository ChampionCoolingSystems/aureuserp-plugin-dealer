<?php

namespace ChampionCoolingSystems\Dealer\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dealer extends Model
{
    /** @use HasFactory<\Database\Factories\DealerFactory> */
    use HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dealers_dealers';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
            'firstname', 
            'lastname', 
            'companyname', 
            'email', 
            'phone', 
            'fax', 
            'address', 
            'city', 
            'State', 
            'postcode', 
            'Country', 
            'active', 
    ];
}
