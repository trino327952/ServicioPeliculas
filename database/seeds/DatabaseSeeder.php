<?php

use Illuminate\Database\Seeder;
use App\TipoUsuario;
use App\User;

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
        $item = new  User();
        $item->idtipo="1";
        $item->name = "admin";
        $item->email = "admin@admin.com";
        $item->password = bcrypt('123456789');
        $item->estado_del = "1";
        $item->save();

        $item = new  User();
        $item->idtipo="1";
        $item->name = "Adrian";
        $item->email = "xxxx@hotmail.com";
        $item->password = bcrypt('123456789');
        $item->estado_del = "1";
        $item->save();
    }
}
