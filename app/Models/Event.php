<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Event extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'image_path', 'file_path', 'target', 'received_price'];


    ######### FUNCTIONS ##########

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
        $name =  \Str::random(10) . '.' . $ext;
        $file = $file->storeAs('public/event/' . $this->id . '/' . $type . '/' , $name);
        if ($type == 'images')
            $this->image_path ='storage/event/' . $this->id . '/' . $type . '/' . $name;
        else $this->file_path ='storage/event/' . $this->id . '/' . $type . '/' . $name;

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
    
    // protected function getReceivedState():Attribute{
    //     return Attribute::make(
    //         get: function () {
    //             dd($this->received());
    //             return $this->received();
    //         }
    //     );
    // }

}


