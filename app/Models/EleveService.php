<?php

namespace App\Models;
use App\Types\TypeStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EleveService extends Model
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
    protected $table = 'eleve_services';
    protected $fillable = [
        'inscription_id',
        'service_id',
        'date_inscription',
        'montant',
        'taux_remise',
        'annee_id',
        'type_service_id',
        'statut',
      
        'etat',
    ];

   

    public static function addEleveService(
        $inscription_id, 
        $service_id,
         $date_inscription, 
         $montant,
         $taux_remise,
         $annee_id,
         $type_service_id,
         $statut
        
    )
    {
        $eleveservice = new EleveService();

        $eleveservice->inscription_id = $inscription_id;
        $eleveservice->service_id = $service_id;
        $eleveservice->date_inscription = $date_inscription;
        $eleveservice->montant = $montant;
        $eleveservice->taux_remise = $taux_remise;
        $eleveservice->annee_id = $annee_id;
        $eleveservice->type_service_id = $type_service_id;
        $eleveservice->statut = $statut;


        $eleveservice->created_at = Carbon::now();
        $eleveservice->save();

        return $eleveservice;
    }




    public static function rechercheEleveServiceById($id)
    {
        return EleveService::findOrFail($id);
    }




    public static function updateEleveService(
        $id,
         $inscription_id, 
        $service_id,
         $date_inscription, 
         $montant,
         $taux_remise,
         $annee_id,
         $type_service_id,
         $statut
     )


    {
        return EleveService::findOrFail($id)->update([
            'inscription_id' => $inscription_id,
            'service_id' => $service_id,
            'date_inscription' => $date_inscription,
            'montant' => $montant,
            'taux_remise' => $taux_remise,
            'annee_id' => $annee_id,
            'type_service_id' => $type_service_id,
            'statut' => $statut,
        ]);
    }

    public static function deleteEleveService($id)
    {
        $eleveservice = EleveService::findOrFail($id)->update(['etat' => TypeStatus::SUPPRIME]);
        return $eleveservice ? 1 : 0;
    }

    public static function getListe($annee_id = null, $statut = null,  $type_service_id = null, $service_id = null)
    {
        $query = EleveService::where('etat', '!=', TypeStatus::SUPPRIME);
        if ($annee_id !== null) {
            $query->where('annee_id', '=', $annee_id);
        }


        if ($statut !== null) {
            $query->where('statut', '=', $statut);
        }


        if ($type_service_id !== null) {
            $query->where('type_service_id', '=', $type_service_id);
        }


         if ($service_id !== null) {
            $query->where('service_id', '=', $service_id);
        }


        return $query->get();
    }

    public static function getTotal($annee_id = null, $statut = null,  $type_service_id = null,  $service_id = null )
    {
        $query = DB::table('specialite_eleves')->where('etat', '!=', TypeStatus::SUPPRIME);


        if ($annee_id !== null) {
            $query->where('annee_id', '=', $annee_id);
        }


        if ($statut !== null) {
            $query->where('statut', '=', $statut);
        }


        if ($type_service_id !== null) {
            $query->where('type_service_id', '=', $type_service_id);
        }


         if ($service_id !== null) {
            $query->where('service_id', '=', $service_id);
        }



        return $query->count() ?: 0;
    }

    public function annee()
    {
        return $this->belongsTo(Annee::class, 'annee_id');
    }

    public function inscription()
    {
        return $this->belongsTo(Inscription::class, 'inscription_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }



   


}
