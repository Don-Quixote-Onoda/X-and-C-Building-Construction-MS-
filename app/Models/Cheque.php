<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cheque extends Model
{
    use HasFactory;

    protected $table = 'cheques';

    public $primaryKey = 'id';

    public $timestamp = true;

    public function purchases() {
        return $this->hasMany('App\Models\Purchase');
    }

    public function employee(){
        return $this->belongsTo('App\Models\EmployeeName');
    }
}
