# PHP_visitors_tracking_system
99% accurate visitors tracking system for PHP  >= 7.0

# USAGE
```php
$stalk = new Stalk;

$stalk->ip; //outputs clients IP address

$stalk->browser->name; //outputs clients Browser name
$stalk->browser->version; //outputs clients Browser version
$stalk->browser->OS; //outputs clients Operating system

$stalk->continent; //outputs clients continent name
$stalk->continent_code; //outputs continent code
$stalk->country; //outputs clients country name
$stalk->country_code; //outputs clients country code
$stalk->state; //outputs clients region name
$stalk->state_code; //outputs clients region code
$stalk->city; //outputs clients city
$stalk->postal_code; //outputs clients postal code
$stalk->metro_code; //outputs clients metro code
$stalk->latitude; //outputs clients latitude
$stalk->longitude; //outputs clients longitude
$stalk->timezone; //outputs clients timezone
$stalk->datetime; //outputs clients datetime
```
## Initializer ___constructor(?Closure $on_fail, ?string $ip)_
 - `$ip` : An explicit IP.
 - `$on_fail`: A callback function that will be called if error occurred with IP data query.
```php
new Stalk(function (string $error) {
    var_dump($error);
});
```
