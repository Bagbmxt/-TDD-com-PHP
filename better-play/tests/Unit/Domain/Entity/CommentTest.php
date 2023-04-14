<?php

namespace Tests\BetterPlay\Unit\Domain\Entity;

use BetterPlay\app\Domain\Entity\Traits\EntityTraits;
use BetterPlay\Domain\Entity\Comment;
use BetterPlay\Domain\ValueObject\Uuid;
use DateTime;
use Tests\TestCase;


class CommentTest extends TestCase
{

    public function test_Attributes()
    {
        $uuid = (string) Uuid::random();
        $description = "Description comment";
        $createAt = "2023-03-16 12:12:12";
        $comment = new Comment(
            id: $uuid,
            description: $description,
            isActive: true,
            createdAt: $createAt,
        );

         $this->assertEquals($uuid, $comment->id());
         $this->assertEquals($description, $comment->description);
         $this->assertEquals(true, $comment->isActive);
}

public function test_Activated()
{
    $description = "Comment";
    $comment = new Comment(
        description: $description,
        isActive: false,
    );

    $this->assertFalse($comment->isActive);
    $comment->activate();
    $this->assertTrue($comment->isActive);
}

public function test_Disabled()
{

    $description = "Comment";
    $comment = new Comment(
        description: $description,
        isActive: true,
    );

    $this->assertTrue($comment->isActive);
    $comment->disable();
    $this->assertFalse($comment->isActive);
}

}
