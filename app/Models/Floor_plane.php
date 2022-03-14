<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Floor_plane extends Model
{
    use HasFactory;
    protected $fillable = [
        //'restaurnt_id', 'room_name', 'width_x', 'height_y', 'description'
         'restaurnt_id', 'hall_name', 'background_img', 'table_x', 'table_y', 'data_json', 'description'

    ];
}
