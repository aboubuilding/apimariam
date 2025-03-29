<?php

namespace App\Models;

use App\Types\TypeStatus;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Vente extends Model
{
    use HasFactory;

    public function __construct(array $attributes=[])
    {
        parent::__construct($attributes);
        $this->etat=TypeStatus::ACTIF;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [

      
        'date_vente',
        'statut',
        'annee_id',
        'boutique_id',
        
        'client_id',
        'type_journal_id',
        
       


        'etat',

    ];



    /**
     * Ajouter une Vente
     
  
     * @param  date $date_vente
     * @param  int $statut
     * @param  int $annee_id
     * @param  float $boutique_id
     
     * @param  int $type_journal_id
     * @param  int $client_id
   



     * @return Vente
     */

    public static function addVente (

    
        $date_vente,
        $statut,
        $annee_id,
         $boutique_id,
        $client_id,
        $type_journal_id,
       
      


        $id


    )
    {
        $vente = new Vente();

      
        $vente->date_vente = $date_vente;
        $vente->statut = $statut;
        $vente->annee_id = $annee_id;
        $vente->boutique_id = $boutique_id;
        $vente->client_id = $client_id;
        $vente->type_journal_id = $type_journal_id;
        
     



        $vente->created_at = Carbon::now();

        $vente->save();

        return $vente;
    }

    /**
     * Affichage d'une année scolaire
     * @param int $id
     * @return  Vente
     */

    public static function rechercheVenteById($id)
    {

        return   $vente= Vente::findOrFail($id);
    }

    /**
     * Update d'une Vente scolaire
     *
     *
     *
   
     * @param  date $date_vente
     * @param  int $statut
     * @param  int $annee_id
     * @param  float $boutique_id
     
     * @param  int $type_journal_id
     * @param  int $client_id
   
     * @param int $id
     * @return  Vente
     */

    public static function updateVente(
        
        $date_vente,
        $statut,
        $annee_id,
         $boutique_id,
        $client_id,
        $type_journal_id,
       
      
        $id)
    {


        return   $vente= Vente::findOrFail($id)->update([

           

            'date_vente' => $date_vente,
            'statut' => $statut,
            'annee_id' => $annee_id,
            'boutique_id' => $boutique_id,
            'client_id' => $client_id,
            'type_journal_id' => $type_journal_id,
            
           


            'id' => $id,


        ]);
    }




    /**
     * Supprimer une Vente
     *
     * @param int $id
     * @return  boolean
     */

    public static function deleteVente($id)
    {

        $vente= Vente::findOrFail($id)->update([
            'etat' => TypeStatus::SUPPRIME

        ]);

        if ($vente) {
            return 1;
        }
        return 0;
    }



    /**
     * Retourne la liste des Ventes


     * @param  int $annee_id
     * @param  int $statut
     * @param  int $client_id
     * @param  int $type_journal_id
     * @param  int $boutique_id




     *
     * @return  array
     */

    public static function getListe(

       
        $annee_id = null,
        $statut = null,
        $client_id = null,
         $type_journal_id = null,
        $boutique_id = null,
      



        $id)

        {



        $query =  Vente::where('etat', '!=', TypeStatus::SUPPRIME)
        ;




        if ($annee_id != null) {

            $query->where('annee_id', '=', $annee_id);
        }




        if ($client_id != null) {

            $query->where('client_id', '=', $client_id);
        }



        if ($type_journal_id != null) {

            $query->where('type_journal_id', '=', $type_journal_id);
        }


         


         if ($boutique_id != null) {

            $query->where('boutique_id', '=', $boutique_id);
        }




        return    $query->get();
    }



    /**
     * Retourne le nombre  des  activités
 *
     *

     * @param  int $annee_id
     * @param  int $statut
     * @param  int $client_id
     * @param  int $type_journal_id
     * @param  int $boutique_id
     *
     * @return  int $total
     */

    public static function getTotal(

         $annee_id = null,
        $statut = null,
        $client_id = null,
         $type_journal_id = null,
        $boutique_id = null




    ) {

        $query =   DB::table('ventes')


            ->where('ventes.etat', '!=', TypeStatus::SUPPRIME);




        if ($annee_id != null) {

            $query->where('annee_id', '=', $annee_id);
        }

        if ($inscription_id != null) {

            $query->where('inscription_id', '=', $inscription_id);
        }


        if ($client_id != null) {

            $query->where('client_id', '=', $client_id);
        }



        if ($type_journal_id != null) {

            $query->where('type_journal_id', '=', $type_journal_id);
        }




         if ($detail_id != null) {

            $query->where('detail_id', '=', $detail_id);
        }


         if ($boutique_id != null) {

            $query->where('boutique_id', '=', $boutique_id);
        }



        $total = $query->count();

        if ($total) {

            return   $total;
        }

        return 0;
    }



    /**
     * Obtenir une année
     *
     */
        public function annee()
    {


        return $this->belongsTo(Annee::class, 'annee_id');
    }





    /**
     * Obtenir une client 
     *
     */
    public function client()
    {


        return $this->belongsTo(Client::class, 'client_id');
    }



     /**
     * Obtenir un typejournal 
     *
     */
    public function typejournal()
    {


        return $this->belongsTo(TypeJournal::class, 'type_journal_id');
    }





    /**
     * Obtenir une boutique 
     *
     */
    public function boutique()
    {


        return $this->belongsTo(Boutique::class, 'boutique_id');
    }





}
