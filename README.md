# php-vegas-renderer
Interact with a SQL Database

Install using composer :
```
composer require pierreminiggio/vegas-renderer
```

```php

use PierreMiniggio\VegasRenderer\VegasRenderer;

$renderer = new VegasRenderer('C:\\Program Files\\VEGAS\\VEGAS Pro 17.0\\vegas170.exe');
$renderer->render(
    'F:\\videos\\vlogs\\test\\projet.veg',
    'Windows Media Video V11',
    'Vidéo HD 1080-30p 8 Mbits/s',
    'F:\\videos\\vlogs\\test\\projet.wmv'
);

```
