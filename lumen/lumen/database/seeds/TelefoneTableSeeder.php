<?php

use CodeAgenda\Entities\Telefone;
use Illuminate\Database\Seeder;

class TelefoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Telefone::class, 80)->create();
    }
}
