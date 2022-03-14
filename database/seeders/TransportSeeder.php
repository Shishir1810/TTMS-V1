<?php

namespace Database\Seeders;
use App\Models\Transport;
use Illuminate\Database\Seeder;

class TransportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            Category::create([
                'Name'=>'ENA','Price'=>'1500',
                'Details'=>'Buisness',
                
            ]);
        //
    }
}
