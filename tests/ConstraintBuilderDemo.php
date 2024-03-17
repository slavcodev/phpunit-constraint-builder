<?php

declare(strict_types=1);

namespace Slavcodev\PHPUnit\Tests;

use PHPUnit\Framework\Constraint\Constraint;
use PHPUnit\Framework\Constraint\IsTrue;
use Slavcodev\PHPUnit\ConstraintBuilder;

final class ConstraintBuilderDemo extends ConstraintBuilder
{
    private IsTrue $internal;

    public function __construct()
    {
        $this->internal = new IsTrue();
    }

    protected function getConstraint(): Constraint
    {
        return $this->internal;
    }
}
