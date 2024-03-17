<?php

declare(strict_types=1);

namespace Slavcodev\PHPUnit\Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use Slavcodev\PHPUnit\ConstraintBuilder;

#[CoversClass(ConstraintBuilder::class)]
final class ConstraintBuilderTest extends TestCase
{
    #[Test]
    public function delegatesToProvidedConstraint(): void
    {
        $constraint = $this->createConstraint();
        self::assertThat(true, $constraint);
    }

    private function createConstraint(): ConstraintBuilderDemo
    {
        return new ConstraintBuilderDemo();
    }
}
