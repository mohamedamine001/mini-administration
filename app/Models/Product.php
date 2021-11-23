<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'price'
    ];


    /**
     * Has Many Relation - Eloquent Relation for Commandes
     *
     * @return void
     */
    public function orders() {
        return $this->belongsToMany(Order::class);
    }
}
