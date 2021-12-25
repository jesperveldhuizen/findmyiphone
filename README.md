PHP-FindMyiPhone
================

## Local install

```bash
cd qlico
docker-compose build --pull --no-cache
cd ..
make up
make shell
composer install
```

## Installation

```bash
composer require jesperveldhuizen/findmyiphone
```

## Usage

```php
<?php

namespace FindMyiPhone;

use GuzzleHttp\Exception\GuzzleException;

require_once 'vendor/autoload.php';

$fmi = new Client(':username', ':password');

try {
    $devices = $fmi->getDevices();
} catch (\Exception | GuzzleException $e) {
    die($e->getMessage());
}

echo '<pre>';
print_r($devices);
```

The ```getDevices``` function returns the devices linked to the iCloud account. If location is found then a ```Location``` object will be available in the ```Device``` object.
