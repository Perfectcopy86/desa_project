<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call(DataPersebaranPendudukSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(class: PopulationDataSeeder::class);    
        $this->call(class: PendidikanTerakhirSeeder::class);    
        $this->call(class: DataPekerjaanSeeder::class);    
        $this->call(class: DataKependudukanAgamaSeeder::class);    
        $this->call(class: DataKelompokUmurSeeder::class);   
        // $this->call(class: NewsSeeder::class);   
        // $this->call(class: GallerySeeder::class);   
    }

}
