<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    /** @use HasFactory<\Database\Factories\RomeFactory> */
    use HasFactory;


    protected $guarded = [];

    public function roomTypes()
    {
        return $this->belongsToMany(RoomType::class, 'room_room_types');
    }

}
