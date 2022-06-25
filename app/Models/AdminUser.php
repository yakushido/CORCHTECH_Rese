<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminUser extends Authenticatable
{
    use HasFactory;

    protected $table = 'admin_users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'shop_id'
    ];

    public function shop()
    {
        return $this->belongsTo('App\Models\Shop');
    }
}
