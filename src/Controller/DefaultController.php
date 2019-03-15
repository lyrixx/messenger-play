<?php

namespace App\Controller;

use App\Message\SmsNotification;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index(MessageBusInterface $bus)
    {
        $message = new SmsNotification('THE CONTENT!');
        $bus->dispatch($message);

        return $this->json(['test' => true]);
    }
}
