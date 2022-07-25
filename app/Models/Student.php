<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    use HasFactory;
    protected $fillable = ['department' ,'study_type', 'stage', 'division'];


    ### Start Relationships ###

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    ### End Relationships ###


    public function edit($data)    {
        $this->fill($data);
        $this->save();
    }


}
