# LS Emoji

Small library which helps you to use Unicode emoji. Light and stable. Can be easily
extended by new emoji (version 1.0.0 contains 8 emoji :) )

### Install
Simply (using composer):
`composer require leonpro778/lsemoji`

### Using

#### Change chars from pattern to emoji
```php
$someTextToConvert = "Some text which including emoji from characters. :)";
echo LSEmoji::changeCharsToEmoji($someTextToConvert);
``` 
The `:)' will be converted to :smiley:

#### Insert emoji in own files
```php
echo LSEmoji::insertEmoji(":)"); 
``` 



