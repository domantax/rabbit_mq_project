<?php

namespace App\Controller;

use App\Message\SmsNotification;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;

class DefaultController extends AbstractController
{
    public function index(MessageBusInterface $bus)
    {
        $i = 0;
        while ($i < 10000) {
            $bus->dispatch(new SmsNotification('Look! I created a message!'));
            $i++;
        }


        return new Response('123');
    }
}