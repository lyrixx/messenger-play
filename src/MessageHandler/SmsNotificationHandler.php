<?php

namespace App\MessageHandler;

use App\Message\SendEmail;
use App\Message\SmsNotification;
use Psr\Log\LoggerInterface;
use Symfony\Component\Messenger\Envelope;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Messenger\Stamp\DispatchAfterCurrentBus;

class SmsNotificationHandler implements MessageHandlerInterface
{
    private $logger;

    private $messageBus;

    public function __construct(LoggerInterface $logger, MessageBusInterface $bus2)
    {
        $this->logger = $logger;
        $this->messageBus = $bus2;
    }

    public function __invoke(SmsNotification $notification)
    {
        throw new \Exception();
        $this->messageBus->dispatch(new Envelope(
            new SendEmail()
            //new DispatchAfterCurrentBus()
        ));

        $this->logger->info($notification->getContent());
    }
}
