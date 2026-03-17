<?php

namespace ChampionCoolingSystems\Dealer\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;

class BillingAddress extends Model
{
    /** @use HasFactory<\Database\Factories\BillingAddressFactory> */
    use HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dealer_billing_addresses';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'dealer_id', 
        'address', 
        'city', 
        'State', 
        'postcode', 
        'Country', 
    ];

    /**
     * Get the associated dealer.
     */
    public function dealer(): HasOne
    {
        return $this->hasOne(Dealer::class);
    }
}
