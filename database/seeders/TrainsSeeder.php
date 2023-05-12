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
        $trainCSV = fgetcsv($trainFile);

        $trainCSV = fgetcsv($trainFile);

        while($trainCSV != false){
            $newTrain = new Train();

            $newTrain->azienda = $trainCSV[0];
            $newTrain->stazione_di_partenza = $trainCSV[1];
            $newTrain->Stazione_di_arrivo = $trainCSV[2];
            $newTrain->orario_di_partenza = $trainCSV[3];
            $newTrain->orario_di_arrivo = $trainCSV[4];
            $newTrain->codice_treno = $trainCSV[5];
            $newTrain->numero_carrozze = $trainCSV[6];
            $newTrain->in_orario = $trainCSV[7];
            $newTrain->cancellato = $trainCSV[8];

            $newTrain->save();

            $trainCSV = fgetcsv($trainFile);
        }
    }
}
