<?php
namespace LSEmoji;

use LSEmoji\libs\EmojiExceptions;
use LSEmoji\libs\EmojiTextSymbol;

class LSEmoji
{
    public static function changeCharsToEmoji(string $inputText)
    {
        return str_replace(EmojiTextSymbol::searchEmoji(), EmojiTextSymbol::searchReplaceEmoji(), $inputText);
    }

    public static function insertEmoji($emoji)
    {
        try {
            if (!array_key_exists(strtolower($emoji), EmojiTextSymbol::EMOJIS)) {
                throw new EmojiExceptions('not_found');
            }
            return EmojiTextSymbol::EMOJIS[strtolower($emoji)];
        } catch (EmojiExceptions $exception) {
            $exception->notFound($emoji);
            exit();
        }
    }
}
