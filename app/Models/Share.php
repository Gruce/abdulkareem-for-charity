<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    use HasFactory;
    protected $fillable = ['share', 'note', 'user_id', 'admin_id'];

    ### Start Relationships ###

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    ### End Relationships ###


    ### Start Scopes ###
    public function accept_share($state)
    {
        $this->admin_id = auth()->user()->id;
        $this->state = !$state;
        $this->save();
    }
    ### End Scopes ###

    public function add($share)
    {
        Share::create([
            'user_id' => auth()->user()->id,
            'share' => $share,

        ]);
    }

}

