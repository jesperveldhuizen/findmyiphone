PHP-FindMyiPhone
================

This project is inspired by: https://github.com/joostfaassen/PHP-FindMyiPhone

Code has been reformatted and old code is removed. This project is only for location Apple devices. It is not possible to send a beep, or lock your device.

## Installation

```
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
