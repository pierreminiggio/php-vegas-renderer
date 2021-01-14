# php-vegas-renderer

Install using composer :
```
composer require pierreminiggio/vegas-renderer
```

```php

use PierreMiniggio\VegasRenderer\FrFrVersion170Build387\Template\WMV\WindowsMediaVideoV11\WMVVideoHd108030p8Mbitss;
use PierreMiniggio\VegasRenderer\VegasRenderer;

$renderer = new VegasRenderer('C:\\Program Files\\VEGAS\\VEGAS Pro 17.0\\vegas170.exe');
$renderer->render(
    'F:\\videos\\vlogs\\test\\projet.veg',
    new WMVVideoHd108030p8Mbitss(),
    'F:\\videos\\vlogs\\test\\projet.wmv'
);

```

You can generate your own vegas pro version's classes by changing the string argument in load.php and by running `composer run-script load`
Feel free to send me a PR if you do generate them.
