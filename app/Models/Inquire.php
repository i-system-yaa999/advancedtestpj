<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquire extends Model
{
    //use HasFactory;
    protected $table='inquiries';
    protected $fillable=['name','email'];
    public static $rules=array(
        'name'=>'required',
        'email'=>'required'
    );

}
