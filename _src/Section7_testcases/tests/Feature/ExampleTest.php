<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    protected $first, $second, $post;
    public function setUp()
    {
        Parent::setUp();
        $this->artisan('migrate:refresh');
        $this->seed();
        $this->first = factory(\App\Post::class)->create([
            'title'=>'First Title',
            'content'=>'Content for First Title'
        ]);
        $this->second = factory(\App\Post::class)->create([
            'created_at'=>\Carbon\Carbon::now()->subMonth(),
            'title'=>'Second Title',
            'content'=>'Content for Second Title'
            ]);
            $this->post = factory(\App\Post::class)->make([
                'title'=>'New Title',
                'content'=>'Content for New Title'
                ]);
    }
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testControllerStoresPost()
    {
        $response = $this->actingAs($this->post->user)->json('POST','/posts',[
            'title'=>$this->post->title,
            'content'=>$this->post->content,
            'id'=>$this->post->user_id,
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('posts');
    }
    public function testControllerGetAllPost()
    {
        $response = $this->json('GET','/posts');
        $response->assertStatus(200);
        $response->assertViewhas('posts');
    }
}
