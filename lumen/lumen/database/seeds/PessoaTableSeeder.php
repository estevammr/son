<?php

use CodeAgenda\Entities\Pessoa;
use Illuminate\Database\Seeder;

class PessoaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Pessoa::class, 30)->create();
    }
}