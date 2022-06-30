<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class DateBook extends Model
{
    use HasFactory;
    protected $fillable = ['name','company','email','number','email','data','foto'];
}
