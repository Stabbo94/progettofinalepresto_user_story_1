<?php

namespace Database\Seeders;


use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public $categories = [
        'Elettronica',
        'Abbigliamento',
        'Tech',
        'Giocattoli',
        'Casa',
        'Motori',
        'Viaggi',
        'Salute e benessere',
        'Libri e riviste',
        'Accessori',
        'Sport',
        'Fai da te'
    ];
    
    
    
    public function run(): void
    {
        foreach ($this->categories as $category){
            Category::create([
                'name' => $category
            ]);
        }
    }
}
