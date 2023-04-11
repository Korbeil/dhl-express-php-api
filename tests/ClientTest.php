<?php

namespace Korbeil\DHLExpress\Tests;

use Korbeil\DHLExpress\Api\Client;
use Korbeil\DHLExpress\Api\Endpoint\ExpApiAddressValidate;
use Korbeil\DHLExpress\ClientFactory;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    private Client $mockClient;

    protected function setUp(): void
    {
        $clientFactory = new ClientFactory('fake-url', 'fake-username', 'fake-password');
        $this->mockClient = $clientFactory->getMockClient();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    public function testClient(): void
    {
        $response = $this->mockClient->executeRawEndpoint(new ExpApiAddressValidate([
            'type' => 'pickup',
            'countryCode' => 'FR',
            'postalCode' => '75011',
            'cityName' => 'Paris',
        ]));

        self::assertEquals(401, $response->getStatusCode());
    }
}
