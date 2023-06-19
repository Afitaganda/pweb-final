<?php

namespace Database\Seeders;

use App\Models\produk;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class produkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();           
        DB::table('produk')->insert([
            [
            'produk_id'=>'PRD1',
            'nama'=>'Amoxicillin',
            'stok'=>random_int(100,200),
            'harga'=>3500,
            'keterangan'=>$faker->sentence,
            ],
        ]);
        DB::table('produk')->insert([
            [
            'produk_id'=>'PRD2',
            'nama'=>'Bodrexin',
            'stok'=>random_int(100,200),
            'harga'=>5000,
            'keterangan'=>$faker->sentence,
            ],
        ]);
        DB::table('produk')->insert([
            [
            'produk_id'=>'PRD3',
            'nama'=>'Aspirin',
            'stok'=>random_int(100,200),
            'harga'=>10000,
            'keterangan'=>$faker->sentence,
            ],
        ]);
        DB::table('produk')->insert([
            [
            'produk_id'=>'PRD4',
            'nama'=>'Ibuprofen',
            'stok'=>random_int(100,200),
            'harga'=>1000,
            'keterangan'=>$faker->sentence,
            ],
        ]);
        DB::table('produk')->insert([
            [
            'produk_id'=>'PRD5',
            'nama'=>'Paracetamol',
            'stok'=>random_int(100,200),
            'harga'=>5000,
            'keterangan'=>$faker->sentence,
            ],
        ]);
    }
}
