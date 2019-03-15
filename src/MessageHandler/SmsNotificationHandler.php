<?php

namespace App\MessageHandler;

use App\Message\SmsNotification;
use Psr\Log\LoggerInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class SmsNotificationHandler implements MessageHandlerInterface
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function __invoke(SmsNotification $notification)
    {
        throw new \Exception('I sploded!');
        $this->logger->info($notification->getContent());
    }
}
