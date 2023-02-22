# A PHP client for DHL Express API

I found close to nothing related to DHL Express API and needed it for a customer. So here I decided to make it
open-source so everybody could use it freely.

This SDK is generated automatically with [JanePHP](https://github.com/janephp/janephp)
from the [official DHL Express specs](https://developer.dhl.com/api-reference/dhl-express-mydhl-api).

It also provides a **full object oriented interface** for all the endpoints, requests and responses of the DHL 
Express REST API.

## Installation

This library is made with [`symfony/http-client`](https://symfony.com/doc/current/http_client.html) as our HTTP 
transport. So by installing it, you'll have close to nothing in order to make it work:

```bash
composer require korbeil/dhl-express-php-api
```

## Quick start

```php
// $client contains all the methods to interact with the API
$clientFactory = new Korbeil\DHLExpress\ClientFactory($dhlExpressUrl, $dhlExpressUsername, $dhlExpressPassword);
$client = $clientFactory->getClient();

$pickupRequest = new Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupRequest();
// ... fill your request contents

$response = $client->expApiPickups($pickupRequest);
$trackingNumbers = $response->getDispatchConfirmationNumbers();
```

## Tests

If you want to use the DHL Express API in your tests, you can get a client dedicated for this purpose by doing as
following:

```php
$testClient = $clientFactory->getMockClient();
```

## License

This library is licensed under the MIT License - see the [LICENSE](LICENSE.md)
file for details.
