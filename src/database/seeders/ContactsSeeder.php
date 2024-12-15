<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;
use App\Models\Category;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::firstOrCreate(['id' => 1], ['content' => '商品のお届けについて']);
        Category::firstOrCreate(['id' => 2], ['content' => '商品の交換ついて']);
        Category::firstOrCreate(['id' => 3], ['content' => '商品トラブル']);
        Category::firstOrCreate(['id' => 4], ['content' => 'ショップへのお問い合わせ']);
        Category::firstOrCreate(['id' => 5], ['content' => 'その他']);

        Contact::factory(35)->create();
    }
}
