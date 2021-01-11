<?php

namespace App\Controller;

use App\Message\OrderMessage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Messenger\MessageBusInterface;

class DefaultController extends AbstractController
{
    public function index()
    {
        return $this->render('home/index.html.twig');
    }

    public function sendOrder(MessageBusInterface $bus)
    {
        $bus->dispatch(
            new OrderMessage('New Order')
        );

        return $this->redirectToRoute('index');
    }
}