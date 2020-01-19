<?php

use Illuminate\Database\Seeder;
use App\TipoUsuario;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $item = new TipoUsuario();
        $item->codigo="001";
        $item->descripcion = "admin";
        $item->estado_del = "1";
        $item->save();

        $item = new TipoUsuario();
        $item->codigo="002";
        $item->descripcion = "cliente";
        $item->estado_del = "1";
        $item->save();
        // $this->call(UsersTableSeeder::class);
    }
}
