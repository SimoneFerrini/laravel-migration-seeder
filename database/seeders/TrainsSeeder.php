<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $trainFile = fopen(__DIR__ . '/../trains.csv', 'r');
        $trainCVS = fgetcsv($trainFile);

        $trainCVS = fgetcsv($trainFile);

        while($trainCVS != false){
            $newTrain = new Train();

            $newTrain->azienda = $trainCVS[0];
            $newTrain->stazione_di_partenza = $trainCVS[1];
            $newTrain->Stazione_di_arrivo = $trainCVS[2];
            $newTrain->orario_di_partenza = $trainCVS[3];
            $newTrain->orario_di_arrivo = $trainCVS[4];
            $newTrain->codice_treno = $trainCVS[5];
            $newTrain->numero_carrozze = $trainCVS[6];
            $newTrain->in_orario = $trainCVS[7];
            $newTrain->cancellato = $trainCVS[8];

            $newTrain->save();

            $trainCVS = fgetcsv($trainFile);
        }
    }
}
