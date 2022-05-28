<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Committee extends Model
{
    protected $fillable = ['name', 'stage', 'department', 'phone_num', 'study_type', 'photo'];
    use HasFactory;

    ### add ###
    public function add($data)
    {
        $this->fill($data);
        $this->save();
    }
    ### End add ###
    ### edit ###
    public function edit($data){
        $this->update($data);
    }
    ### End edit ###


    public function add_image($photo)
    {

        $ext = $photo->extension();
        $name =  \Str::random(10) . '.' . $ext;
        $photo = $photo->storeAs('public/event/' . $this->id  . '/' , $name);
        $this->image_path ='storage/event/' . $this->id  . '/' . $name;

        $this->save();
    }

    ### edit ###
    public function edit($data)
    {
        $this->update($data);
    }
}
