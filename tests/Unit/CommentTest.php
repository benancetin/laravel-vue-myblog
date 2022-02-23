<?php

namespace Tests\Unit;

use App\Comment;
use Tests\TestCase;
use Faker\Generator as Faker;

class CommentTest extends TestCase
{
    public function test_can_create_comment()
    {
        $this->withoutExceptionHandling();

        $data = [
            'name' => $this->faker->firstName,
            'body' => $this->faker->paragraph
        ];

        $response = $this->call('POST', 'api/comments/store', $data)
        ->assertStatus(200);
        // ->assertJson($data);
    }
}
