<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function room() {
        return $this->belongsTo(Room::class, 'room_id');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
