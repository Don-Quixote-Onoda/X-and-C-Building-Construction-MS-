<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    public $primaryKey = 'id';

    public $timestamp = true;

    public function client(){
        return $this->belongsTo('App\Models\Client');
    }

    public function purchases() {
        return $this->hasMany('App\Models\Purchase');
    }

}
