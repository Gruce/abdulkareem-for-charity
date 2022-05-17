<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Event extends Model
{
    protected $fillable = ['title', 'description', 'image_path', 'file_path', 'target', 'received_price'];
    use HasFactory;

    ######### FUNCTIONS ##########

    ### add ###
    public function add($data){
        $this->fill($data);
        $this->save();
    }
    ### End add ###
    public function add_file($file, $type = 1)
    {
        // dd($file->extension());
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

    public function getLimit($column, $value = 140){
        return \Str::limit($this->$column, $value);
    }
    public function add_price($received_price){
        $this->received_price += $received_price;
        $this->save();
    }

    ######### END FUNCTIONS ##########

    public function received()
    {
        return $this->target - $this->received_price;
    }
}


