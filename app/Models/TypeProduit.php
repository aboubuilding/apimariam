<?php

namespace App\Models;

use App\Types\TypeStatus;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class TypeProduit extends Model
{
    use HasFactory;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->etat = TypeStatus::ACTIF;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [


        'libelle',
       
        
        'etat',

    ];



    /**
     * Ajouter une TypeProduit
     *

     * @param  string $libelle
    
    
     *
     * @return TypeProduit
     */

    public static function addTypeProduit(
        $libelle,
        
       

    ) {
        $TypeProduit = new TypeProduit();


        $TypeProduit->libelle = $libelle;
    
        
        $TypeProduit->created_at = Carbon::now();

        $TypeProduit->save();

        return $TypeProduit;
    }

    /**
     * Affichage d'une année scolaire
     * @param int $id
     * @return  TypeProduit
     */

    public static function rechercheTypeProduitById($id)
    {

        return   $TypeProduit = TypeProduit::findOrFail($id);
    }

    /**
     * Update d'une TypeProduit scolaire
     * @param  string $libelle
    
    
     *
     *
     * @param int $id
     * @return  TypeProduit
     */

    public static function updateTypeProduit(
        $libelle,
       
       
        $id
    ) {

        return   $TypeProduit = TypeProduit::findOrFail($id)->update([

            'libelle' => $libelle,
          
            
            'id' => $id,

        ]);
    }




    /**
     * Supprimer une TypeProduit
     *
     * @param int $id
     * @return  boolean
     */

    public static function deleteTypeProduit($id)
    {

        $TypeProduit = TypeProduit::findOrFail($id)->update([
            'etat' => TypeStatus::SUPPRIME

        ]);

        if ($TypeProduit) {
            return 1;
        }
        return 0;
    }



    /**
     * Retourne la liste des années
    

     *
     * @return  array
     */

    public static function getListe(

      
      

    ) {

        $query =  TypeProduit::where('etat', '!=', TypeStatus::SUPPRIME);



       

        return    $query->get();
    }



    /**
     * Retourne le nombre  des  années
     *
    
    
     *
     *
     *
     * @return  int $total
     */

    public static function getTotal(

      
       

    ) {

        $query =   DB::table('parent_eleves')

            ->where('parent_eleves.etat', '!=', TypeStatus::SUPPRIME);

        

       

        $total = $query->count();

        if ($total) {

            return   $total;
        }

        return 0;
    }



 



 /**
     * Obtenir un espace 
     *
     */
    public function annee()
    {


        return $this->belongsTo(Annee::class, 'annee_id');
    }








}
