<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $table = "doctors";

    protected $primaryKey = 'd_id';
    //protected $fillable = ['stud_name', 'stud_city', 'stud_contact', 'stud_image'];
    protected $timestamp = true;
}
