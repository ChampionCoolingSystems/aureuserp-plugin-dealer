<?php

namespace ChampionCoolingSystems\Dealer\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ContactInformation extends Model
{
    /** @use HasFactory<\Database\Factories\ContactInformationFactory> */
    use HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dealer_contact_informations';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'dealer_id', 
        'firstname', 
        'lastname', 
        'email', 
        'phone', 
        'fax', 
    ];

    /**
     * Get the associated dealer.
     */
    public function dealer(): HasOne
    {
        return $this->hasOne(Dealer::class);
    }
}
