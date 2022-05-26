<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $table = 'purchases';

    public $primaryKey = 'id';

    public $timestamp = true;

    public function cheque(){
        return $this->belongsTo('App\Models\Cheque');
    }

    public function project(){
        return $this->belongsTo('App\Models\Project');
    }
}
