<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Event extends Model
{
    protected $fillable = ['title', 'description', 'image_path', 'file_path', 'target', 'received_price'];
    use HasFactory;

    ### add ###
    public function add($data){
        $this->fill($data);
        $this->save();
    }
    ### End add ###
    public function add_file($file, $type = 1)
    {
        $type = $type == 1 ? 'images' : 'files';
        $ext = $file->extension();
        $name = \Str::random(10) . '.' . $ext;
        $file = $file->storeAs('public/event/' . $this->id . '/' . $type . '/' , $name);
        if ($type == 'images')
            $this->image_path = $name;
        else $this->file_path = $name;

        $this->save();
    }
    ### edit ###
    public function edit($data){
        $this->update($data);
    }
    ### End edit ###

}

