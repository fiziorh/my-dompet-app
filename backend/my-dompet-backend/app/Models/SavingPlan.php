<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavingPlan extends Model
{
    use HasFactory;
    protected $table = 'saving_goal';
    protected $primaryKey = 'id_saving';
    protected $fillable = ['title', 'target_amount', 'target_date'];

    public function user()
    {
        return $this->belongsTo(User::class); // Assuming User model exists
    }
}
