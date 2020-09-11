<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;
use App\Team;
use App\Comment;

class TeamsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGetTeamsWithAuthenticatedUser()
    {
        //priprema test
        $user =User::inRandomOrder()->first();
        //izvrsavanje akcije
        $response = $this->actingAs($user)->get('/teams');

        //tvrdnje
        $response->assertStatus(200);

        $response->assertViewIs('teams.teams');
    }

    public function testGetTeamsWithUnauthenticatedUser() {
        //izvrsavanje akcije
        $response = $this->get('/teams');
        //tvrdnje
        $response->assertRedirect('/login');
    }
/*
    public function testCreatingCommentsWithEmptyData() {

        
        $team = Team::inRandomOrder()->first();
        $response = $this->actingAs($team)->comments('/teams/teams/{id}/comments', []);

        $response->assertRedirect('/team/teams/singleTeam');
        $response->assertStatus(302);
        $response->assertLocation('/team/singleTeam');
    }
    */
}
