<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    /** @use HasFactory<\Database\Factories\RomeTypeFactory> */
    use HasFactory;

    protected $guarded = [];


    public function rooms()
    {
        return $this->belongsToMany(Room::class, 'room_room_types');
    }
}
