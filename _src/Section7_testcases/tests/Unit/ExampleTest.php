<?php

namespace Tests\Unit;
use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
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
    }
    public function testIfPostsExist()
    {
        $posts = Post::all();
        $this->assertCount(2,$posts);  
    }
    public function testAddPost()
    {
        $post = new Post();
        $post->title = 'New Title';
        $post->content = 'Content for New Title';
        $post->user_id = 3;
        $post->save();
        $this->assertCount(3,Post::all());
    }
    public function testFindAPost()
    {
        $post = Post::find(1);
        $this->assertEquals($post->title,'First Title');  
        $this->assertDatabaseHas('posts',[
            'title'=>'Second Title'
        ]);
    }
    public function testDeleteAPost()
    {
        $this->second->delete();
        $this->assertDatabaseMissing('posts',[
            'title'=>'Second Title'
        ]);
    }
}
