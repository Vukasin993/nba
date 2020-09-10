<?php

use Illuminate\Database\Seeder;
use App\News;
use App\User;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(News::class, 10)->make()->each(function($news){
            $user = User::inRandomOrder()->first();
           
            $news->user_id = $user->id;
          
            $news->save();
        });
    }
}