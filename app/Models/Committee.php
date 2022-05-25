<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    protected $fillable = ['name', 'stage','study_type', 'photo', 'department' ,'phone_number'];
    use HasFactory;

    public function add($data){
        $this->fill($data);
        $this->save();
    }

    // public function add_file($file, $type = 1)
    // {

    //     $type = $type == 1 ? 'images' : 'files';
    //     $ext = $file->extension();
    //     $name =  \Str::random(10) . '.' . $ext;
    //     $file = $file->storeAs('public/event/' . $this->id . '/' . $type . '/' , $name);
    //     if ($type == 'images')
    //         $this->image_path ='storage/event/' . $this->id . '/' . $type . '/' . $name;
    //     else $this->file_path ='storage/event/' . $this->id . '/' . $type . '/' . $name;

    //     $this->save();
    // }

}
