<?php

use Illuminate\Database\Seeder;
use App\Desk;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function generateDesks(){
        $desk_title = [
            'Правки',
            'Установки',
            'Новинки',
            'Лучшее',
        ];
        $desk_description = [
            'Все о правках',
            'Все об установках',
            'Все о новинках',
            'Все о лучшем',
        ];

        foreach (array_combine($desk_title, $desk_description) as $name => $description){
            Desk::create([
                'name' => $name,
                'description' => $description
            ]);
        }
    }

    public function run()
    {
        DB::table('desks')->truncate();

        $this->generateDesks();
        // $this->call(UsersTableSeeder::class);
    }
}
