<?php

namespace Database\Seeders;
use App\Models\Rak;
use Illuminate\Database\Seeder;

class RakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rak = ['novel', 'sejarah', 'religi', 'biografi', 'komik'];

        for ($i=1; $i <= 5; $i++) {
            Rak::create([
                'rak' => 1,
                'baris' => $i,
                'kategori_id' => 1,
                'slug' => 1 . '-' .$i
            ]);
        }
    }
}
