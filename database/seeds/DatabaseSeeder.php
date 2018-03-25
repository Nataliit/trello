<?php

use Illuminate\Database\Seeder;
use App\Desk;
use App\Shelf;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function generateDesks(){
        $desk_titles = [
            'Правки',
            'Установки',
            'Новинки',
            'Лучшее',
        ];
        $desk_descriptions = [
            'Все о правках',
            'Все об установках',
            'Все о новинках',
            'Все о лучшем',
        ];

        foreach (array_combine($desk_titles, $desk_descriptions) as $name => $description){
            Desk::create([
                'name' => $name,
                'description' => $description
            ]);
        }
    }

    public function generateShelves(){
        $desks = Desk::all();

        foreach ($desks as $desk){
            $names = [
                'Create',
                'Read',
                'Edit',
                'Delete'
            ];
            foreach ($names as $name) {
                Shelf::create([
                    'desk_id' => $desk->id,
                    'name' => $name
                ]);
            }
        }
    }

    public function run()
    {
        DB::table('desks')->truncate();
        DB::table('shelves')->truncate();

        $this->generateDesks();
        $this->generateShelves();
    }
}
