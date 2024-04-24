<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavingPlan extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'target_amount', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class); // Assuming User model exists
    }
}
