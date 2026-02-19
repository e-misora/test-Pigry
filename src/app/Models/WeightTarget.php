<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeightTarget extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'user_id',
        'target_weight',
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
