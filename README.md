# A PHP client for DHL Express API

I found close to nothing related to DHL Express API and needed it for a customer. So here I decided to make it
open-source so everybody could use it freely.

This SDK is generated automatically with [JanePHP](https://github.com/janephp/janephp)
from the [official DHL Express specs](https://developer.dhl.com/api-reference/dhl-express-mydhl-api).

It also provides a **full object oriented interface** for all the endpoints, requests and responses of the DHL
Express REST API.

## Requirements

- PHP >= 8.1

## Installation

This library is made with [`symfony/http-client`](https://symfony.com/doc/current/http_client.html) as our HTTP
transport. So by installing it, you'll have close to nothing in order to make it work:

```bash
composer require korbeil/dhl-express-php-api
```

## Getting started

The only entry point you need is the [`ClientFactory`](src/ClientFactory.php). It takes your DHL Express API URL
and your basic-auth credentials:

```php
use Korbeil\DHLExpress\ClientFactory;

// Production: https://express.api.dhl.com/mydhlapi
// Test:       https://express.api.dhl.com/mydhlapi/test
$clientFactory = new ClientFactory(
    'https://express.api.dhl.com/mydhlapi',
    $dhlExpressUsername,
    $dhlExpressPassword,
);

$client = $clientFactory->getClient();
```

### First request

Validate a pickup/delivery address — this endpoint only takes query parameters:

```php
use Korbeil\DHLExpress\Api\Endpoint\Address\ExpApiAddressValidate;

$response = $client->expApiAddressValidate([
    'type' => 'pickup',
    'countryCode' => 'FR',
    'postalCode' => '75011',
    'cityName' => 'Paris',
]);

foreach ($response->getAddress() ?? [] as $addressMatch) {
    // ...
}
```

### Tracking a shipment

```php
$tracking = $client->expApiShipmentsTracking('1234567890');

foreach ($tracking->getShipments() ?? [] as $shipment) {
    foreach ($shipment->getEvents() ?? [] as $event) {
        echo $event->getDate() . ' ' . $event->getTime() . ': ' . $event->getDescription() . \PHP_EOL;
    }
}
```

### Sending a request body

Endpoints that need a payload take a typed model. For example, estimating landed cost:

```php
use Korbeil\DHLExpress\Api\Model\Rating\SupermodelIoLogisticsExpressLandedCostRequest;

$request = new SupermodelIoLogisticsExpressLandedCostRequest();
// ... fill your request contents (customer details, items, charges, ...)

$response = $client->expApiLandedCost($request);
```

Every endpoint method also accepts a `$fetch` argument — pass
`Korbeil\DHLExpress\Api\Client::FETCH_RESPONSE` if you want the raw PSR-7 response instead of a deserialized
model.

## Error handling

Every endpoint throws a dedicated exception per documented error response, each carrying the deserialized
error model:

```php
use Korbeil\DHLExpress\Api\Exception\ExpApiAddressValidateBadRequestException;

try {
    $response = $client->expApiAddressValidate([...]);
} catch (ExpApiAddressValidateBadRequestException $e) {
    $errorResponse = $e->getSupermodelIoLogisticsExpressErrorResponse(); // SupermodelIoLogisticsExpressErrorResponse
    $psr7Response = $e->getResponse();
}
```

Invalid query or header parameters throw `Korbeil\DHLExpress\Api\Runtime\Normalizer\ValidationException`
before any HTTP call is made.

## Testing your integration

DHL provides a mock server returning fixed test data. The factory gives you a client pre-configured for it
(`https://api-mock.dhl.com/mydhlapi`) — handy in unit tests:

```php
$testClient = $clientFactory->getMockClient();
```

## Generated code layout

Classes are sorted by topic thanks to JanePHP's `x-namespace` support:

| Namespace | Topic |
| --- | --- |
| `Api\Endpoint\Address\`, `Api\Model\Address\` | Address validation |
| `Api\Endpoint\Identifier\`, `Api\Model\Identifier\` | Tracking identifiers lookup |
| `Api\Endpoint\Invoice\`, `Api\Model\Invoice\` | Invoice data upload |
| `Api\Endpoint\Pickup\`, `Api\Model\Pickup\` | Pickup booking / update / cancel |
| `Api\Endpoint\Product\`, `Api\Model\Product\` | Available products & capabilities |
| `Api\Endpoint\Rating\`, `Api\Model\Rating\` | Rating, rates & landed cost |
| `Api\Endpoint\Shipment\`, `Api\Model\Shipment\` | Shipment creation |
| `Api\Endpoint\Shipment\Documents\`, `Api\Model\Shipment\Documents\` | Shipment documents & images |
| `Api\Endpoint\Shipment\Tracking\`, `Api\Model\Shipment\Tracking\` | Tracking & proof of delivery |
| `Api\Model\Common\` | Models shared across topics (accounts, addresses, contacts, errors, ...) |

Exception classes live flat under `Api\Exception\`. Nested sub-models of a topic's root model stay in
`Api\Model\` — only top-level schemas are grouped.

## Regenerating the SDK

The client is fully generated from `resources/dpdhl-express-api-2.7.0-swagger.yaml`:

```bash
composer install
composer generate   # jane-openapi generate --config-file .jane-openapi.php
composer cs-check
composer tests
```

Generation options live in [`.jane-openapi.php`](.jane-openapi.php). To organize generated classes, add an
`x-namespace` extension on operations and/or component schemas in the spec (supports sub-namespaces via `\`,
e.g. `x-namespace: 'Shipment\Tracking'`), then regenerate.

## License

This library is licensed under the MIT License - see the [LICENSE](LICENSE.md)
file for details.
