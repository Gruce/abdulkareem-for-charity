<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    protected $fillable = ['name', 'stage', 'type' ,'photo'];
    use HasFactory;

}
