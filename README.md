# Installation

mecab for cli must be first installed.

Then, using composer:
```
composer install maalls/mecab-cli-to-php
```

# Example

```php
<?php 

use Maalls\Mecab;


$mecab = new \Maalls\Mecab();
$mecab->parseToNode('世界こんにちは');
var_dump($nodes[0]->getSurface()); // 世界こんにちは
var_dump($nodes[0]->getFeature()); // 名詞,一般,*,*,*,*,世界,セカイ,セカイ
```

# Tests

./vendor/bin/phpunit tests