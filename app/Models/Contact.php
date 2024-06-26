<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;

class Contact extends Model
{
    use HasFactory;
    public $fillable = ['name', 'email', 'subject', 'message'];

    public static function boot() {
   
        parent::boot();
   
        static::created(function ($item) {
                 
            $adminEmail = "profmusaprojects@gmail.com";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }
}
