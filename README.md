# PHP_visitors_tracking_system
99% accurate visitors tracking system for PHP  >= 7.0

```bash
composer require ghostff/php-visitors-tracking
```

# USAGE
```php
$geo = new VisitorTracking;

$visitor->ip; //outputs clients IP address

$geo->browser->name; //outputs clients Browser name
$geo->browser->version; //outputs clients Browser version
$geo->browser->OS; //outputs clients Operating system

$geo->continent; //outputs clients continent name
$geo->continent_code; //outputs continent code
$geo->country; //outputs clients country name
$geo->country_code; //outputs clients country code
$geo->state; //outputs clients region name
$geo->state_code; //outputs clients region code
$geo->city; //outputs clients city
$geo->postal_code; //outputs clients postal code
$geo->metro_code; //outputs clients metro code
$geo->latitude; //outputs clients latitude
$geo->longitude; //outputs clients longitude
$geo->timezone; //outputs clients timezone
$geo->datetime; //outputs clients datetime
```
## Initializer ___constructor(?Closure $on_fail, ?string $ip)_
 - `$on_fail`: A callback function that will be called if error occurred with IP data query.
 - `$ip` : An explicit IP.
```php
new VisitorTracking(function (string $error) {
    var_dump($error);
});
```
