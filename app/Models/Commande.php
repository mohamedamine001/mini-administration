<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'price',
        'client_id',
    ];

    /**
     * Belongs To Relation - Eloquent Relation For Client
     *
     * @return void
     */
    public function client() {
        return $this->belongsTo(Client::class);
    }

    /**
     * Belongs To Relation - Eloquent Relation For Product
     *
     * @return void
     */
    public function products() {
        return $this->belongsToMany(Product::class)
        ->withTimestamps()
        ->withPivot('quantity');
    }
}
