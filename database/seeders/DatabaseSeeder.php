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
            ActiviteSeeder::class,
            AnneeEditionSeeder::class,
            AnneeSeeder::class,
            BanqueSeeder::class,
            BonSeeder::class,
            BoutiqueSeeder::class,
            BulletinSeeder::class,
            CaisseSeeder::class,
            CantineSeeder::class,
            CarSeeder::class,
            CategorieLivreSeeder::class,
            EmployeSeeder::class,
 
            ChequeSeeder::class,

            ClasseSeeder::class,
            CompteSeeder::class,
            CycleSeeder::class,
            DeductionSeeder::class,
            DepenseSeeder::class,
            DepenseVoitureSeeder::class,
            DetailAchatSeeder::class,
            DetailBonSeeder::class,
            DetailSeeder::class,
            EleveSeeder::class,
            EmployeSeeder::class,
            EspaceSeeder::class,
            FournisseurSeeder::class,
            FraisEcoleSeeder::class,
            InscriptionSeeder::class,
            LigneSeeder::class,
            LivreSeeder::class,
            LocationSeeder::class,
            MagasinSeeder::class,
            MaisonEditionSeeder::class,
            
            MouvementSeeder::class,
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
            SouscriptionSeeder::class,
            SpecialiteEleveSeeder::class,
            
            StockSeeder::class,
            TrancheSeeder::class,
            UtilisateurSeeder::class,
            VaccinEleveSeeder::class,
            VaccinSeeder::class,
            VenteSeeder::class,
            VoitureSeeder::class,
            ZoneSeeder::class,




        ]);
    }
}
