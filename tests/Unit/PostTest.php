<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;


class PostTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_belongs_to_an_owner()
    {
        $post = factory(\App\Models\Post::class)->make();

        $this->assertInstanceOf('App\User', $post->owner);
    }

    /** @test */
    public function it_belongs_to_a_category()
    {
        $post = factory(\App\Models\Post::class)->make();

        $this->assertInstanceOf('App\Models\Category', $post->category);
    }

    /** @test */
    public function it_has_many_comments()
    {
        $post = factory(\App\Models\Post::class)->make();

        $this->assertInstanceOf(Collection::class, $post->comments);
    }
}
