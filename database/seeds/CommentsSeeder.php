<?php

use Illuminate\Database\Seeder;
use App\Comment;
use App\User;
use App\Team;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Comment::class, 10)->make()->each(function($comment){
            $user = User::inRandomOrder()->first();
            $team = Team::inRandomOrder()->first();
            $comment->user_id = $user->id;
            $comment->team_id = $team->id;
            $comment->save();
            
            
        });
    }
}
