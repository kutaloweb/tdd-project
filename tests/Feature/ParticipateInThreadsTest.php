<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ParticipateInThreadsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function unauthenticated_users_may_not_add_replies()
    {
        $this->withExceptionHandling()
            ->post('/threads/1/replies', [])
            ->assertRedirect('/login');
    }

    /** @test */
    function an_authenticated_user_may_participate_in_forum_threads()
    {
        $this->signIn();

        $thread = factory('App\Thread')->create();
        $reply = factory('App\Reply')->make();

        $this->post($thread->path() . '/replies', $reply->toArray());
        $this->get($thread->path())->assertSee($reply->body);
        $this->assertDatabaseHas('replies', ['body' => $reply->body]);
    }
}
