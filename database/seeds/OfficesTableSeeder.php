<?php
use App\Offices;
use Illuminate\Database\Seeder;

class OfficesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Offices::truncate();
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            Offices::create([
                'name' => $faker->company,
                'address' => $faker->streetAddress,
            ]);
        }
    }
}
