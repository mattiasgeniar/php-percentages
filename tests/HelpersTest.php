<?php

declare(strict_types=1);

namespace Mattiasgeniar\Percentage\Tests;

use PHPUnit\Framework\TestCase;

final class HelpersTest extends TestCase
{
    /**
     * @test
     */
    public function it_can_calculate_percentage_between(): void
    {
        $result = percentage_between(1, 0);
        self::assertNotNull($result);
    }

    /**
     * @test
     */
    public function it_can_calculate_percentage_abs_between(): void
    {
        $result = percentage_abs_between(1, 0);
        self::assertNotNull($result);
    }

    /**
     * @test
     */
    public function it_can_calculate_percentage(): void
    {
        $result = percentage(1, 1);
        self::assertNotNull($result);
    }

    /**
     * @test
     */
    public function it_can_calculate_percentage_of(): void
    {
        $result = percentage_of(1, 1);
        self::assertNotNull($result);
    }

    /**
     * @test
     */
    public function it_can_calculate_percentage_extension(): void
    {
        $result = percentage_extension(1, 1, 1);
        self::assertNotNull($result);
    }
}
