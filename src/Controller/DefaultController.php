<?php

namespace App\Controller;

use App\Message\SmsNotification;
use Enqueue\MessengerAdapter\EnvelopeItem\TransportConfiguration;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Messenger\Envelope;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index(MessageBusInterface $bus)
    {
        $message = new SmsNotification('First SMS Notification!');

//        $transportConfig = (new TransportConfiguration())
//            ->setDeliveryDelay(10000)
//        ;
        //$bus->dispatch((new Envelope($message))->with($transportConfig));
        $bus->dispatch((new Envelope($message)));

        //$bus->dispatch(new SmsNotification('Second message'));

        return $this->json(['test' => true]);
    }
}
