<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
    ];


    /**
     * Has Many Relation - Eloquent Relation for Commandes
     *
     * @return void
     */
    public function commandes() {
        return $this->hasMany(Commande::class);
    }

}
