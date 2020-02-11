<?php


namespace LSEmoji\libs;

use Exception;

class EmojiExceptions extends Exception
{
    public function notFound($emoji)
    {
        echo "{$emoji} - emoji not found";
    }
}
