<?php

declare(strict_types=1);

namespace Smudger\REPO_NAME\Tests;

use InvalidArgumentException;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;
use Smudger\REPO_NAME\Domain\Email;

final class EmailTest extends TestCase
{
    public function test_can_be_created_from_valid_email_address(): void
    {
        Assert::assertEquals(
            'user@example.com',
            Email::fromString('user@example.com')->__toString()
        );
    }

    public function test_cannot_be_created_from_invalid_email_address(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Email::fromString('invalid');
    }

    public function test_can_be_used_as_string(): void
    {
        Assert::assertEquals(
            'user@example.com',
            Email::fromString('user@example.com')
        );
    }
}
