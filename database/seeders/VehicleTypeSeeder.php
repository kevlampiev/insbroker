<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicle_types')
            ->insert($this->getData());
    }

    private function getData():array
    {
        return [
            ['name'=>'Грузовик', 'created_at'=>now()],
            ['name'=>'Автокран', 'created_at'=>now()],
            ['name'=>'Легковой транспорт', 'created_at'=>now()],
            ['name'=>'Микроавтобус', 'created_at'=>now()],
            ['name'=>'Карьрный самосвал', 'created_at'=>now()],
            ['name'=>'Карьерный экскаватор', 'created_at'=>now()],
            ['name'=>'Автогрейдер', 'created_at'=>now()],
            ['name'=>'Бульдозер', 'created_at'=>now()],
        ];
    }
}
