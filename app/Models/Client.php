<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';
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

    public static function getClient(){
        /*$records = DB::table('clients')
                    ->select('first_name','last_name','email','phone')
                    ->withCount('commandes')
                    ->get()
                    ->toArray();*/
        $sheets = [];
        $records =  Client::select(['first_name', 'last_name','email','phone'])
                    ->has('commandes')
                    ->withCount('commandes')->get();
        array_push($sheets, $records);
/*        $commandes = Commande::with('client','products')->get();
        foreach($commandes as $cmd){
            
        }
*/
        //$sheets =$records;

       
        
        return $sheets;
    }
    /**
     * Has Many Relation - Eloquent Relation for Commandes
     *
     * @return void
     */
    public function commandes() {
        return $this->hasMany(Commande::class);
    }

}
