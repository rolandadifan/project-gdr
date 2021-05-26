<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert([
            'name' => 'Aceh',
        ]);
        DB::table('provinces')->insert([
            'name' => 'Sumatera Utara',
        ]);
        DB::table('provinces')->insert([
            'name' => 'Sumatera Barat',
        ]);
        DB::table('provinces')->insert([
            'name' => 'Riau',
        ]);
        DB::table('provinces')->insert([
            'name' => 'Kepulauan Riau',
        ]);
        DB::table('provinces')->insert([
            'name' => 'Jambi ',
        ]);
        DB::table('provinces')->insert([
            'name' => 'Sumatera Selatan',
        ]);
        DB::table('provinces')->insert([
            'name' => 'Kepulauan Bangka Belitung',
        ]);
        DB::table('provinces')->insert([
            'name' => 'Bengkulu',
        ]);
        DB::table('provinces')->insert([
            'name' => 'Lampung',
        ]);
        DB::table('provinces')->insert([
            'name' => 'DKI Jakarta',
        ]);
        DB::table('provinces')->insert([
            'name' => 'Banten',
        ]);
        DB::table('provinces')->insert([
            'name' => 'Jawa Barat',
        ]);
        DB::table('provinces')->insert([
            'name' => 'Jawa Tengah',
        ]);
        DB::table('provinces')->insert([
            'name' => 'DI Yogyakarta',
        ]);
        DB::table('provinces')->insert([
            'name' => 'Jawa Timur',
        ]);
        DB::table('provinces')->insert([
            'name' => 'Bali',
        ]);
        DB::table('provinces')->insert([
            'name' => 'Nusa Tenggara Barat',
        ]);
        DB::table('provinces')->insert([
            'name' => 'Nusa Tenggara Timur',
        ]);
        DB::table('provinces')->insert([
            'name' => 'Kalimantan Barat',
        ]);
        DB::table('provinces')->insert([
            'name' => 'Kalimantan Tengah',
        ]);
        DB::table('provinces')->insert([
            'name' => 'Kalimantan Selatan',
        ]);
        DB::table('provinces')->insert([
            'name' => 'Kalimantan Timur',
        ]);
        DB::table('provinces')->insert([
            'name' => 'Kalimantan Utara',
        ]);
        DB::table('provinces')->insert([
            'name' => 'Sulawesi Utara',
        ]);
        DB::table('provinces')->insert([
            'name' => 'Gorontalo',
        ]);
        DB::table('provinces')->insert([
            'name' => 'Sulawesi Tengah',
        ]);
        DB::table('provinces')->insert([
            'name' => 'Sulawesi Barat',
        ]);
        DB::table('provinces')->insert([
            'name' => 'Sulawesi Selatan',
        ]);
        DB::table('provinces')->insert([
            'name' => 'Sulawesi Tenggara',
        ]);
        DB::table('provinces')->insert([
            'name' => 'Maluku',
        ]);
        DB::table('provinces')->insert([
            'name' => 'Maluku Utara',
        ]);
        DB::table('provinces')->insert([
            'name' => 'Papua Barat',
        ]);
        DB::table('provinces')->insert([
            'name' => 'Papua',
        ]);
    }
}
