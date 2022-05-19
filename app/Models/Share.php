<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    use HasFactory;
    protected $fillable = ['share', 'note', 'user_id'];

    ### Start Relationships ###

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    ### End Relationships ###

    public function add($share, $note = null)
    {
        $this->share = $share;
        $this->note = $note;
        $this->user_id = auth()->user()->id;
        $this->save();
    }
    public function state($state)
    {
        $this->state = !$state;
        $this->save();
    }
}
    // public function add($data){
    //     $this->fill($data);
    //     $this->save();
    // }
