<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


    //----------------- LES CONTROLEURS CRUD 

    //----------------- Annnées scolaires 

    Route::get('/admin/annees/index', [App\Http\Controllers\Admin\AnneeController::class, 'index'])->name('admin_annees_index');
    Route::get('/admin/annees/add', [App\Http\Controllers\Admin\AnneeController::class, 'add'])->name('admin_annees_add');
    Route::post('/admin/annees/save', [App\Http\Controllers\Admin\AnneeController::class, 'store'])->name('admin_annees_store');
    Route::get('/admin/annees/modifier/{id}', [App\Http\Controllers\Admin\AnneeController::class, 'edit'])->name('admin_annees_edit');
    Route::post('/admin/annees/update/{id}', [App\Http\Controllers\Admin\AnneeController::class, 'update'])->name('admin_annees_update');
    Route::post('/admin/annees/delete/{id}', [App\Http\Controllers\Admin\AnneeController::class, 'delete'])->name('admin_annees_delete');





    //----------------- Vaccins 

    Route::get('/admin/vaccins/index', [App\Http\Controllers\Admin\VaccinController::class, 'index'])->name('admin_vaccins_index');
    Route::get('/admin/vaccins/add', [App\Http\Controllers\Admin\VaccinController::class, 'add'])->name('admin_vaccins_add');
    Route::post('/admin/vaccins/save', [App\Http\Controllers\Admin\VaccinController::class, 'store'])->name('admin_vaccins_store');
    Route::get('/admin/vaccins/modifier/{id}', [App\Http\Controllers\Admin\VaccinController::class, 'edit'])->name('admin_vaccins_edit');
    Route::post('/admin/vaccins/update/{id}', [App\Http\Controllers\Admin\VaccinController::class, 'update'])->name('admin_vaccins_update');
    Route::post('/admin/vaccins/delete/{id}', [App\Http\Controllers\Admin\VaccinController::class, 'delete'])->name('admin_vaccins_delete');





    //----------------- Spacialités  

    Route::get('/admin/specialites/index', [App\Http\Controllers\Admin\SpecialiteController::class, 'index'])->name('admin_specailites_index');
    Route::get('/admin/specialites/add', [App\Http\Controllers\Admin\SpecialiteController::class, 'add'])->name('admin_specailites_add');
    Route::post('/admin/specialites/save', [App\Http\Controllers\Admin\SpecialiteController::class, 'store'])->name('admin_specailites_store');
    Route::get('/admin/specialites/modifier/{id}', [App\Http\Controllers\Admin\SpecialiteController::class, 'edit'])->name('admin_specailites_edit');
    Route::post('/admin/specialites/update/{id}', [App\Http\Controllers\Admin\SpecialiteController::class, 'update'])->name('admin_specailites_update');
    Route::post('/admin/specialites/delete/{id}', [App\Http\Controllers\Admin\SpecialiteController::class, 'delete'])->name('admin_specailites_delete');





    //----------------- Utilisateurs   

    Route::get('/admin/utilisateurs/index', [App\Http\Controllers\Admin\UtilisateurController::class, 'index'])->name('admin_utilisateur_index');
    Route::get('/admin/utilisateurs/add', [App\Http\Controllers\Admin\UtilisateurController::class, 'add'])->name('admin_utilisateur_add');
    Route::post('/admin/utilisateurs/save', [App\Http\Controllers\Admin\UtilisateurController::class, 'store'])->name('admin_utilisateur_store');
    Route::get('/admin/utilisateurs/modifier/{id}', [App\Http\Controllers\Admin\UtilisateurController::class, 'edit'])->name('admin_utilisateur_edit');
    Route::post('/admin/utilisateurs/update/{id}', [App\Http\Controllers\Admin\UtilisateurController::class, 'update'])->name('admin_utilisateur_update');
    Route::post('/admin/utilisateurs/delete/{id}', [App\Http\Controllers\Admin\UtilisateurController::class, 'delete'])->name('admin_utilisateur_delete');





  //----------------- Paiements 

    Route::get('/admin/paiements/index', [App\Http\Controllers\Admin\PaiementController::class, 'index'])->name('admin_paiement_index');
    Route::get('/admin/paiements/add', [App\Http\Controllers\Admin\PaiementController::class, 'add'])->name('admin_paiement_add');
    Route::post('/admin/paiements/save', [App\Http\Controllers\Admin\PaiementController::class, 'store'])->name('admin_paiement_store');
    Route::get('/admin/paiements/modifier/{id}', [App\Http\Controllers\Admin\PaiementController::class, 'edit'])->name('admin_paiement_edit');
    Route::post('/admin/paiements/update/{id}', [App\Http\Controllers\Admin\PaiementController::class, 'update'])->name('admin_paiement_update');
    Route::post('/admin/paiements/delete/{id}', [App\Http\Controllers\Admin\PaiementController::class, 'delete'])->name('admin_paiement_delete');




  //----------------- Caisses 

    Route::get('/admin/caisses/index', [App\Http\Controllers\Admin\CaisseController::class, 'index'])->name('admin_caisse_index');
    Route::get('/admin/caisses/add', [App\Http\Controllers\Admin\CaisseController::class, 'add'])->name('admin_caisse_add');
    Route::post('/admin/caisses/save', [App\Http\Controllers\Admin\CaisseController::class, 'store'])->name('admin_caisse_store');
    Route::get('/admin/caisses/modifier/{id}', [App\Http\Controllers\Admin\CaisseController::class, 'edit'])->name('admin_caisse_edit');
    Route::post('/admin/caisses/update/{id}', [App\Http\Controllers\Admin\CaisseController::class, 'update'])->name('admin_caisse_update');
    Route::post('/admin/caisses/delete/{id}', [App\Http\Controllers\Admin\CaisseController::class, 'delete'])->name('admin_caisse_delete');



 //----------------- Depenses  

    Route::get('/admin/depenses/index', [App\Http\Controllers\Admin\DepenseController::class, 'index'])->name('admin_depense_index');
    Route::get('/admin/depenses/add', [App\Http\Controllers\Admin\DepenseController::class, 'add'])->name('admin_depense_add');
    Route::post('/admin/depenses/save', [App\Http\Controllers\Admin\DepenseController::class, 'store'])->name('admin_depense_store');
    Route::get('/admin/depenses/modifier/{id}', [App\Http\Controllers\Admin\DepenseController::class, 'edit'])->name('admin_depense_edit');
    Route::post('/admin/depenses/update/{id}', [App\Http\Controllers\Admin\DepenseController::class, 'update'])->name('admin_depense_update');
    Route::post('/admin/depenses/delete/{id}', [App\Http\Controllers\Admin\DepenseController::class, 'delete'])->name('admin_depense_delete');






 //----------------- Cycles   

    Route::get('/admin/cycles/index', [App\Http\Controllers\Admin\CycleController::class, 'index'])->name('admin_cycle_index');
    Route::get('/admin/cycles/add', [App\Http\Controllers\Admin\CycleController::class, 'add'])->name('admin_cycle_add');
    Route::post('/admin/cycles/save', [App\Http\Controllers\Admin\CycleController::class, 'store'])->name('admin_cycle_store');
    Route::get('/admin/cycles/modifier/{id}', [App\Http\Controllers\Admin\CycleController::class, 'edit'])->name('admin_cycle_edit');
    Route::post('/admin/cycles/update/{id}', [App\Http\Controllers\Admin\CycleController::class, 'update'])->name('admin_cycle_update');
    Route::post('/admin/cycles/delete/{id}', [App\Http\Controllers\Admin\CycleController::class, 'delete'])->name('admin_cycle_delete');





 //----------------- Niveaux    

    Route::get('/admin/niveaux/index', [App\Http\Controllers\Admin\NiveauController::class, 'index'])->name('admin_niveau_index');
    Route::get('/admin/niveaux/add', [App\Http\Controllers\Admin\NiveauController::class, 'add'])->name('admin_niveau_add');
    Route::post('/admin/niveaux/save', [App\Http\Controllers\Admin\NiveauController::class, 'store'])->name('admin_niveau_store');
    Route::get('/admin/niveaux/modifier/{id}', [App\Http\Controllers\Admin\NiveauController::class, 'edit'])->name('admin_niveau_edit');
    Route::post('/admin/niveaux/update/{id}', [App\Http\Controllers\Admin\NiveauController::class, 'update'])->name('admin_niveau_update');
    Route::post('/admin/niveaux/delete/{id}', [App\Http\Controllers\Admin\NiveauController::class, 'delete'])->name('admin_niveau_delete');




 //----------------- Classes     

    Route::get('/admin/classes/index', [App\Http\Controllers\Admin\ClasseController::class, 'index'])->name('admin_classe_index');
    Route::get('/admin/classes/add', [App\Http\Controllers\Admin\ClasseController::class, 'add'])->name('admin_classe_add');
    Route::post('/admin/classes/save', [App\Http\Controllers\Admin\ClasseController::class, 'store'])->name('admin_classe_store');
    Route::get('/admin/classes/modifier/{id}', [App\Http\Controllers\Admin\ClasseController::class, 'edit'])->name('admin_classe_edit');
    Route::post('/admin/classes/update/{id}', [App\Http\Controllers\Admin\ClasseController::class, 'update'])->name('admin_classe_update');
    Route::post('/admin/classes/delete/{id}', [App\Http\Controllers\Admin\ClasseController::class, 'delete'])->name('admin_classe_delete');





 //----------------- Eleves      

    Route::get('/admin/inscriptions/index', [App\Http\Controllers\Admin\InscriptionController::class, 'index'])->name('admin_inscription_index');
    Route::get('/admin/inscriptions/add', [App\Http\Controllers\Admin\InscriptionController::class, 'add'])->name('admin_inscription_add');
    Route::post('/admin/inscriptions/save', [App\Http\Controllers\Admin\InscriptionController::class, 'store'])->name('admin_inscription_store');
    Route::get('/admin/inscriptions/modifier/{id}', [App\Http\Controllers\Admin\InscriptionController::class, 'edit'])->name('admin_inscription_edit');
    Route::post('/admin/inscriptions/update/{id}', [App\Http\Controllers\Admin\InscriptionController::class, 'update'])->name('admin_inscription_update');
    Route::post('/admin/inscriptions/delete/{id}', [App\Http\Controllers\Admin\InscriptionController::class, 'delete'])->name('admin_inscription_delete');






 //----------------- Achats       

    Route::get('/admin/achats/index', [App\Http\Controllers\Admin\AchatController::class, 'index'])->name('admin_achats_index');
    Route::get('/admin/achats/add', [App\Http\Controllers\Admin\AchatController::class, 'add'])->name('admin_achat_add');
    Route::post('/admin/achats/save', [App\Http\Controllers\Admin\AchatController::class, 'store'])->name('admin_achat_store');
    Route::get('/admin/achats/modifier/{id}', [App\Http\Controllers\Admin\AchatController::class, 'edit'])->name('admin_achat_edit');
    Route::post('/admin/achats/update/{id}', [App\Http\Controllers\Admin\AchatController::class, 'update'])->name('admin_achat_update');
    Route::post('/admin/achats/delete/{id}', [App\Http\Controllers\Admin\AchatController::class, 'delete'])->name('admin_achat_delete');





 //----------------- magasins       

    Route::get('/admin/magasins/index', [App\Http\Controllers\Admin\MagasinController::class, 'index'])->name('admin_magasin_index');
    Route::get('/admin/magasins/add', [App\Http\Controllers\Admin\MagasinController::class, 'add'])->name('admin_magasin_add');
    Route::post('/admin/magasins/save', [App\Http\Controllers\Admin\MagasinController::class, 'store'])->name('admin_magasin_store');
    Route::get('/admin/magasins/modifier/{id}', [App\Http\Controllers\Admin\MagasinController::class, 'edit'])->name('admin_eleve_edit');
    Route::post('/admin/magasins/update/{id}', [App\Http\Controllers\Admin\MagasinController::class, 'update'])->name('admin_magasin_update');
    Route::post('/admin/magasins/delete/{id}', [App\Http\Controllers\Admin\MagasinController::class, 'delete'])->name('admin_magasin_delete');






 //----------------- Fournisseurs        

    Route::get('/admin/fournisseurs/index', [App\Http\Controllers\Admin\MagasinController::class, 'index'])->name('admin_fournisseur_index');
    Route::get('/admin/fournisseurs/add', [App\Http\Controllers\Admin\MagasinController::class, 'add'])->name('admin_fournisseur_add');
    Route::post('/admin/fournisseurs/save', [App\Http\Controllers\Admin\MagasinController::class, 'store'])->name('admin_fournisseur_store');
    Route::get('/admin/fournisseurs/modifier/{id}', [App\Http\Controllers\Admin\MagasinController::class, 'edit'])->name('admin_fournisseur_edit');
    Route::post('/admin/fournisseurs/update/{id}', [App\Http\Controllers\Admin\MagasinController::class, 'update'])->name('admin_fournisseur_update');
    Route::post('/admin/fournisseurs/delete/{id}', [App\Http\Controllers\Admin\MagasinController::class, 'delete'])->name('admin_fournisseur_delete');






 //----------------- Boutiques         

    Route::get('/admin/boutiques/index', [App\Http\Controllers\Admin\BoutiqueController::class, 'index'])->name('admin_boutique_index');
    Route::get('/admin/boutiques/add', [App\Http\Controllers\Admin\BoutiqueController::class, 'add'])->name('admin_boutique_add');
    Route::post('/admin/boutiques/save', [App\Http\Controllers\Admin\BoutiqueController::class, 'store'])->name('admin_boutique_store');
    Route::get('/admin/boutiques/modifier/{id}', [App\Http\Controllers\Admin\BoutiqueController::class, 'edit'])->name('admin_boutique_edit');
    Route::post('/admin/boutiques/update/{id}', [App\Http\Controllers\Admin\BoutiqueController::class, 'update'])->name('admin_boutique_update');
    Route::post('/admin/boutiques/delete/{id}', [App\Http\Controllers\Admin\BoutiqueController::class, 'delete'])->name('admin_boutique_delete');





 //----------------- Ventes          

    Route::get('/admin/ventes/index', [App\Http\Controllers\Admin\VenteController::class, 'index'])->name('admin_vente_index');
    Route::get('/admin/ventes/add', [App\Http\Controllers\Admin\VenteController::class, 'add'])->name('admin_vente_add');
    Route::post('/admin/ventes/save', [App\Http\Controllers\Admin\VenteController::class, 'store'])->name('admin_vente_store');
    Route::get('/admin/ventes/modifier/{id}', [App\Http\Controllers\Admin\VenteController::class, 'edit'])->name('admin_vente_edit');
    Route::post('/admin/ventes/update/{id}', [App\Http\Controllers\Admin\VenteController::class, 'update'])->name('admin_vente_update');
    Route::post('/admin/ventes/delete/{id}', [App\Http\Controllers\Admin\VenteController::class, 'delete'])->name('admin_vente_delete');







 //----------------- Zones           

    Route::get('/admin/zones/index', [App\Http\Controllers\Admin\ZoneController::class, 'index'])->name('admin_zone_index');
    Route::get('/admin/zones/add', [App\Http\Controllers\Admin\ZoneController::class, 'add'])->name('admin_zone_add');
    Route::post('/admin/zones/save', [App\Http\Controllers\Admin\ZoneController::class, 'store'])->name('admin_zone_store');
    Route::get('/admin/zones/modifier/{id}', [App\Http\Controllers\Admin\ZoneController::class, 'edit'])->name('admin_zone_edit');
    Route::post('/admin/zones/update/{id}', [App\Http\Controllers\Admin\ZoneController::class, 'update'])->name('admin_zone_update');
    Route::post('/admin/zones/delete/{id}', [App\Http\Controllers\Admin\ZoneController::class, 'delete'])->name('admin_e_delete');





 //----------------- Lignes            

    Route::get('/admin/lignes/index', [App\Http\Controllers\Admin\LigneController::class, 'index'])->name('admin_ligne_index');
    Route::get('/admin/lignes/add', [App\Http\Controllers\Admin\LigneController::class, 'add'])->name('admin_zone_add');
    Route::post('/admin/lignes/save', [App\Http\Controllers\Admin\LigneController::class, 'store'])->name('admin_ligne_store');
    Route::get('/admin/lignes/modifier/{id}', [App\Http\Controllers\Admin\LigneController::class, 'edit'])->name('admin_ligne_edit');
    Route::post('/admin/lignes/update/{id}', [App\Http\Controllers\Admin\LigneController::class, 'update'])->name('admin_ligne_update');
    Route::post('/admin/lignes/delete/{id}', [App\Http\Controllers\Admin\LigneController::class, 'delete'])->name('admin_ligne_delete');





 //----------------- Voitures           

    Route::get('/admin/voitures/index', [App\Http\Controllers\Admin\VoitureController::class, 'index'])->name('admin_voiture_index');
    Route::get('/admin/voitures/add', [App\Http\Controllers\Admin\VoitureController::class, 'add'])->name('admin_voiture_add');
    Route::post('/admin/voitures/save', [App\Http\Controllers\Admin\VoitureController::class, 'store'])->name('admin_voiture_store');
    Route::get('/admin/voitures/modifier/{id}', [App\Http\Controllers\Admin\VoitureController::class, 'edit'])->name('admin_voiture_edit');
    Route::post('/admin/voitures/update/{id}', [App\Http\Controllers\Admin\VoitureController::class, 'update'])->name('admin_voiture_update');
    Route::post('/admin/voitures/delete/{id}', [App\Http\Controllers\Admin\VoitureController::class, 'delete'])->name('admin_voiture_delete');





 //----------------- depenses voitures          

    Route::get('/admin/depensesvoitures/index', [App\Http\Controllers\Admin\DepensevoitureController::class, 'index'])->name('admin_depensevoiture_index');
    Route::get('/admin/depensesvoitures/add', [App\Http\Controllers\Admin\DepensevoitureController::class, 'add'])->name('admin_depensevoiture_add');
    Route::post('/admin/depensesvoitures/save', [App\Http\Controllers\Admin\DepensevoitureController::class, 'store'])->name('admin_depensesvoiture_store');
    Route::get('/admin/depensesvoitures/modifier/{id}', [App\Http\Controllers\Admin\DepensevoitureController::class, 'edit'])->name('admin_depensevoiture_edit');
    Route::post('/admin/depensesvoitures/update/{id}', [App\Http\Controllers\Admin\DepensevoitureController::class, 'update'])->name('admin_depensevoiture_update');
    Route::post('/admin/depensesvoitures/delete/{id}', [App\Http\Controllers\Admin\DepensevoitureController::class, 'delete'])->name('admin_depensevoiture_delete');




    //----------------- LES CONTROLEURS NON CRUD  



     //----------------- Statistiques 


    Route::get('/admin/statitiques/paiement', [App\Http\Controllers\Admin\StatistiqueController::class, 'paiement'])->name('admin_stat_paiements');
    Route::get('/admin/statitiques/recouvrements', [App\Http\Controllers\Admin\StatistiqueController::class, 'recouvrement'])->name('admin_stat_recouvrement');
    Route::get('/admin/statistiques/eleves', [App\Http\Controllers\Admin\StatistiqueController::class, 'eleves'])->name('admin_stat_eleve');
    Route::get('/admin/statistiques/cantine', [App\Http\Controllers\Admin\StatistiqueController::class, 'cantine'])->name('admin_stat_cantine');
    Route::get('/admin/statistiques/bus', [App\Http\Controllers\Admin\StatistiqueController::class, 'bus'])->name('admin_stat_bus');
    Route::get('/admin/statistiques/autreservices', [App\Http\Controllers\Admin\StatistiqueController::class, 'autreservices'])->name('admin_stat_autresservices');

   Route::get('/admin/statistiques/autreservices', [App\Http\Controllers\Admin\StatistiqueController::class, 'autreservices'])->name('admin_stat_autresservices');

   Route::get('/admin/statistiques/decaissement', [App\Http\Controllers\Admin\StatistiqueController::class, 'decaissement'])->name('admin_stat_decaissement');

   Route::get('/admin/statistiques/valider', [App\Http\Controllers\Admin\StatistiqueController::class, 'decaissement'])->name('admin_stat_decaissement');


     //----------------- BUS  


   Route::get('/admin/bus/inscrits', [App\Http\Controllers\Admin\BusController::class, 'inscrits'])->name('admin_bus_inscrits');

   Route::get('/admin/bus/chauffeurs', [App\Http\Controllers\Admin\BusController::class, 'chauffeurs'])->name('admin_chauffeurs_inscrits');

     Route::get('/admin/bus/affectations', [App\Http\Controllers\Admin\BusController::class, 'affectations'])->name('admin_chauffeurs_affectation');



    //----------------- CANTINE  


   Route::get('/admin/cantine/inscrits', [App\Http\Controllers\Admin\CantineController::class, 'inscrits'])->name('admin_cantine_inscrits');

   Route::get('/admin/cantine/mouvements', [App\Http\Controllers\Admin\CantineController::class, 'mouvement'])->name('admin_cantine_mouvements');



   //----------------- CAISSE  


   Route::get('/admin/caisses/depenses', [App\Http\Controllers\Admin\CaisseController::class, 'depenses'])->name('admin_caisse_depense');

   Route::get('/admin/caisses/encaissements', [App\Http\Controllers\Admin\CantineController::class, 'encaissements'])->name('admin_caisse_encaissement');

   Route::get('/admin/caisses/decaissements', [App\Http\Controllers\Admin\CantineController::class, 'decaissements'])->name('admin_caisse_decaissement');

   Route::get('/admin/caisses/journaux', [App\Http\Controllers\Admin\CantineController::class, 'journaux'])->name('admin_caisse_journaux');


      //----------------- PAIEMENTS 


     Route::get('/admin/paiements/recouvrement', [App\Http\Controllers\Admin\PaiementController::class, 'recouvrement'])->name('admin_paiement_recouvrement');

   Route::get('/admin/paiements/cheques', [App\Http\Controllers\Admin\PaiementController::class, 'cheques'])->name('admin_paiement_cheque');

   Route::get('/admin/paiements/espaces', [App\Http\Controllers\Admin\PaiementController::class, 'espaces'])->name('admin_paiement_espaces');

   Route::get('/admin/paiements/parents', [App\Http\Controllers\Admin\PaiementController::class, 'parents'])->name('admin_paiement_parent');  