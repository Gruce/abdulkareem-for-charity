<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [ 'accepted_shares', 'paid_amount', 'user_id' ];

    ### Relationships ###

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    ### end Relationships ###
}
