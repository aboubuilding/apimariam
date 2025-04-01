<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AchatSeeder::class,
           
            AnneeEditionSeeder::class,
            AnneeSeeder::class,
            BanqueSeeder::class,
            
            BoutiqueSeeder::class,
            BulletinSeeder::class,
            CaisseSeeder::class,
           
            CategorieDepenseSeeder::class,
            CategorieLivreSeeder::class,
            ChauffeurSeeder::class,
            ChauffeurZoneSeeder::class,
            ChequeSeeder::class,
            ClasseSeeder::class,
            CompteSeeder::class,
            CycleSeeder::class,
            
            DeductionSeeder::class,
            DepenseSeeder::class,
            DetailAchatSeeder::class,
            
            DetailSeeder::class,
            DetailVenteSeeder::class,
            EcoleProvenanceSeeder::class,
            EleveSeeder::class,
            EleveServiceSeeder::class,
            EmplacementSeeder::class,
            EmployeSeeder::class,
            EspaceSeeder::class,
            FournisseurSeeder::class,
            
            InscriptionSeeder::class,
            JournalSeeder::class,
           
            LivreSeeder::class,
           
            MagasinSeeder::class,
            MaisonEditionSeeder::class,
            
            
            NationaliteSeeder::class,
            NiveauSeeder::class,
            PaiementSeeder::class,
            PaieSeeder::class,
            ParentEleveSeeder::class,
            PretSeeder::class,
            ProduitSeeder::class,
            ProfessionSeeder::class,
            QuartierSeeder::class,
            RemunerationSeeder::class,
            RetenueSeeder::class,
            ServiceSeeder::class,
            SpecialiteSeeder::class,
            SpecialiteEleveSeeder::class, 
            
            StockSeeder::class,
            TrancheSeeder::class,
            TransactionStockSeeder::class,
            TypeProduitSeeder::class,
            TypeServiceSeeder::class,
            UtilisateurSeeder::class,
            VaccinEleveSeeder::class,
            VaccinSeeder::class,
            ValidationSeeder::class,
            VenteSeeder::class,
            VoitureSeeder::class,
            ZoneSeeder::class,




        ]);
    }
}
