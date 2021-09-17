<?php

namespace Berzel\Sms;

class Message
{
    /**
     * The message body
     *
     * @var string
     */
    private string $body;

    /**
     * Get or set the body
     *
     * @param string $body
     * @return string|null
     */
    public function body(string $body = null) : ?string
    {
        if (!$body) {
            return $this->body;
        }

        $this->body = $body;
    }
}
