<?php
declare(strict_types=1);

namespace ColumbusInteractive\EasyCaptcha\Exceptions;

use RuntimeException;

final class UnableToLoadFormConfiguration extends RuntimeException
{
    public static function make(string $message) : self
    {
        return new self($message);
    }
}
