<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'mo_number', 'date', 'time', 'people_no', 'message'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $hidden = [
        'updated_at',
        'user_id',
    ];
}
