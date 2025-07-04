<?php

namespace GrotonSchool\Slim\Actions;

use Psr\Log\LoggerInterface;

trait LoggerTrait
{
    protected LoggerInterface $logger;

    public function initLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
