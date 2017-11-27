<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    
    protected $fillable = [
        'user_id',
        'title',
        'content',
        'live'
    ];
    public function setLiveAttribute($value){
        $this->attributes['live'] = (boolean)($value);
    }

    public function getShortContentAttribute(){
        return substr($this->content,0,rand(50,150)).' ...';
    }
}
