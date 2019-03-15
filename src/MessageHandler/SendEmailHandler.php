<?php

namespace App\MessageHandler;

use App\Message\SendEmail;
use Psr\Log\LoggerInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class SendEmailHandler implements MessageHandlerInterface
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function __invoke(SendEmail $email)
    {
        //throw new \Exception('BAAAAAR');
        $this->logger->info('Sending email');
    }
}
