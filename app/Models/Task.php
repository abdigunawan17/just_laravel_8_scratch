<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    //daripada pakai guarded harus nya lebih aman pakai fillable
    //protected $guarded = [];
    protected $fillable = ['list', 'nama'];
    
}
