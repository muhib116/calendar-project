<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // protected $casts = [
    //     'settings' => 'array',
    // ];

    public function talents() {
        return $this->hasMany(User::class, 'category_id', 'id');
    }
}
