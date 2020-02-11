<?php
namespace LSEmoji\libs;

class EmojiTextSymbol
{
    const EMOJIS = [

        ":D" => "\u{1F600}",
        "=D" => "\u{1F603}",
        "x)" => "\u{1F606}",
        ":)" => "\u{1F642}",
        "(:" => "\u{1F643}",
        ":(" => "\u{1F61F}",
    ];

    public static function searchEmoji()
    {
        return array_keys(self::EMOJIS);
    }

    public static function searchReplaceEmoji()
    {
        return array_values(self::EMOJIS);
    }
}
