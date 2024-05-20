<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //set kolom apa saja yang bisa dilakukan insert secara langsung
    protected $table = 'categories';
    protected $fillable = ['name','created_at', 'updated_at'];

}
