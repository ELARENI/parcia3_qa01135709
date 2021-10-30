<?php

use Illuminate\Database\Seeder;
use App\Profesor;
class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Profesor::class,20)->create();
        /*  Profesor::create([
           'id' => '1',
           'name' => 'Ekk',
           'email' => 'ell@gmail.com',
           'password' => bcrypt('kkk'),
       ]);  */
    }
}
