<?php

namespace App\Models;

use App\Types\TypeStatus;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class TypeService extends Model
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
        'annee_id',
        
        'etat',

    ];



    /**
     * Ajouter une TypeService
     *

     * @param  string $libelle
     * @param  int $annee_id
    
     *
     * @return TypeService
     */

    public static function addTypeService(
        $libelle,
        $annee_id,
       

    ) {
        $typeservice = new TypeService();


        $typeservice->libelle = $libelle;
        $typeservice->annee_id = $annee_id;
        
        $typeservice->created_at = Carbon::now();

        $typeservice->save();

        return $typeservice;
    }

    /**
     * Affichage d'une année scolaire
     * @param int $id
     * @return  TypeService
     */

    public static function rechercheTypeServiceById($id)
    {

        return   $typeservice = TypeService::findOrFail($id);
    }

    /**
     * Update d'une TypeService scolaire
     * @param  string $libelle
     * @param  string $annee_id
    
     *
     *
     * @param int $id
     * @return  TypeService
     */

    public static function updateTypeService(
        $libelle,
        $annee_id,
       
        $id
    ) {

        return   $typeservice = TypeService::findOrFail($id)->update([

            'libelle' => $libelle,
            'annee_id' => $annee_id,
            
            'id' => $id,

        ]);
    }




    /**
     * Supprimer une TypeService
     *
     * @param int $id
     * @return  boolean
     */

    public static function deleteTypeService($id)
    {

        $typeservice = TypeService::findOrFail($id)->update([
            'etat' => TypeStatus::SUPPRIME

        ]);

        if ($typeservice) {
            return 1;
        }
        return 0;
    }



    /**
     * Retourne la liste des années
     * @param  int $annee_id
    

     *
     * @return  array
     */

    public static function getListe(

        $annee_id = null
      

    ) {

        $query =  TypeService::where('etat', '!=', TypeStatus::SUPPRIME);


        if ($annee_id != null) {

            $query->where('annee_id', '=', $annee_id);
        }

       

        return    $query->get();
    }



    /**
     * Retourne le nombre  des  années
     *
     * @param int $annee_id
    
     *
     *
     *
     * @return  int $total
     */

    public static function getTotal(

        $annee_id = null
       

    ) {

        $query =   DB::table('parent_eleves')

            ->where('parent_eleves.etat', '!=', TypeStatus::SUPPRIME);

        if ($annee_id != null) {

            $query->where('annee_id', '=', $annee_id);
        }


       

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
