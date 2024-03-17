<?php

declare(strict_types=1);

namespace Slavcodev\PHPUnit;

use PHPUnit\Framework\Constraint\Constraint;
use PHPUnit\Framework\Constraint\Operator;
use SebastianBergmann\Comparator\ComparisonFailure;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
abstract class ConstraintBuilder extends Constraint
{
    /**
     * @psalm-suppress InternalMethod
     */
    public function toString(): string
    {
        return $this->getConstraint()->toString();
    }

    public function count(): int
    {
        return $this->getConstraint()->count();
    }

    abstract protected function getConstraint(): Constraint;

    protected function matches(mixed $other): bool
    {
        return $this->getConstraint()->matches($other);
    }

    protected function fail(mixed $other, string $description, ?ComparisonFailure $comparisonFailure = null): never
    {
        $this->getConstraint()->fail($other, $description, $comparisonFailure);
    }

    protected function additionalFailureDescription(mixed $other): string
    {
        return $this->getConstraint()->additionalFailureDescription($other);
    }

    protected function toStringInContext(Operator $operator, mixed $role): string
    {
        return $this->getConstraint()->toStringInContext($operator, $role);
    }
}
