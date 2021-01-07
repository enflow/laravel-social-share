<?php

namespace Enflow\SocialShare\Exceptions;

use Exception;

class UnknownService extends Exception
{
    public static function create(string $service): self
    {
        return new static("Service '{$service}' is not defined in the services config.");
    }
}
