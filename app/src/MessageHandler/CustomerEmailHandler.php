<?php

namespace App\MessageHandler;

use App\Message\OrderMessage;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class CustomerEmailHandler implements MessageHandlerInterface
{
    public function __invoke(OrderMessage $message)
    {
        echo 'message handled';
    }
}