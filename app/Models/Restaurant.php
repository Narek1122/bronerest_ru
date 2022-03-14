<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

     protected $fillable = [
       
         'restaurant_name', 'contact_name', 'companyname','latitude','longitude','categories', 'phone', 'email','password',

    ];
}
       // $table->string('restaurant_name')->unique();
       //      $table->string('contact_name');
       //      $table->string('companyname')->nullable();
       //      $table->string('phone');
       //      $table->string('email')->unique();
       //      $table->string('password');