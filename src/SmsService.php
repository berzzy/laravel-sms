<?php

namespace Berzel\Sms;

class SmsService
{
    /**
     * The recepient
     *
     * @var string
     */
    protected string $to;

    /**
     * The message body
     *
     * @var string
     */
    protected string $body;

    /**
     * Send the message
     *
     * @param Berzel\Sms\Message
     * @return void
     */
    public function send(Message $message): void
    {
        $this->body = $message->body();
        // Send the message here
    }

    /**
     * Set the recepient of the message
     *
     * @param string $to
     * @return Berzel\Sms\SmsService
     */
    public function to(string $to): SmsService
    {
        $this->to = $to;

        return $this;
    }
}
