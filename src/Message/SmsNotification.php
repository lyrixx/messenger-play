<?php

namespace App\Message;

class SmsNotification
{
    private $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }
}
