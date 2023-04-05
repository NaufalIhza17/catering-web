<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Food extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['food_name', 'food_price', 'food_quantity', 'user_id'];

    public function user()
    {
        return $this->belongsTo((User::class));
    }
}
