<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['email','phone','address'];

    // protected $hidden=['id','created_at','updated_at'];

    public function details()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
