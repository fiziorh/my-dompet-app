<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;
    protected $table = 'income';
    protected $primaryKey = 'id_income';
    protected $fillable = [
        'id_user',
        'title',
        'category',
        'nominal',
        'description',
    ];

}
