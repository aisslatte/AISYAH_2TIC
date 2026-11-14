<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $primaryKey = 'pelanggan_id';
    protected $fillable = [
<<<<<<< HEAD
        'first_name',
        'last_name',
        'birthday',
        'gender',
        'email',
        'phone',
=======
    'first_name',
    'last_name',
    'birthday',
    'gender',
    'email',
    'phone',
>>>>>>> e8be39a (Partial View dan CRUD User)
    ];
}
