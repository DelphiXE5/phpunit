<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Metadata;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Covers extends Metadata
{
    private string $target;

    protected function __construct(int $level, string $target)
    {
        parent::__construct($level);

        $this->target = $target;
    }

    public function isCovers(): bool
    {
        return true;
    }

    public function target(): string
    {
        return $this->target;
    }
}
