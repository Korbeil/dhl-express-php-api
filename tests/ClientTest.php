<?php

namespace Korbeil\DHLExpress\Tests;

use Korbeil\DHLExpress\Api\Client;
use Korbeil\DHLExpress\Api\Endpoint\Address\ExpApiAddressValidate;
use Korbeil\DHLExpress\Api\Exception\BadResponseException;
use Korbeil\DHLExpress\Api\Model\Address\SupermodelIoLogisticsExpressAddressValidateResponse;
use Korbeil\DHLExpress\Api\Model\Shipment\Tracking\SupermodelIoLogisticsExpressTrackingResponse;
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

    /**
     * GET endpoints use the "preload" fetch mode: the request is sent at call
     * time and the returned ghost proxy parses the response on first property
     * access. The mock API answers 401, a status the specification does not
     * declare, so the documented BadResponseException is thrown there.
     */
    public function testAddressValidateUnauthorized(): void
    {
        $proxy = $this->mockClient->expApiAddressValidate([
            'type' => 'pickup',
            'countryCode' => 'FR',
            'postalCode' => '75011',
            'cityName' => 'Paris',
        ]);

        self::assertInstanceOf(SupermodelIoLogisticsExpressAddressValidateResponse::class, $proxy);

        try {
            $proxy->address;
            self::fail(\sprintf('Expected %s to be thrown.', BadResponseException::class));
        } catch (BadResponseException $e) {
            self::assertSame(401, $e->getResponse()->getStatusCode());
        }
    }

    public function testTrackingMultiUnauthorized(): void
    {
        $proxy = $this->mockClient->expApiShipmentsTrackingMulti([
            'shipmentTrackingNumber' => ['JD014600003029019368'],
        ]);

        self::assertInstanceOf(SupermodelIoLogisticsExpressTrackingResponse::class, $proxy);

        try {
            $proxy->shipments;
            self::fail(\sprintf('Expected %s to be thrown.', BadResponseException::class));
        } catch (BadResponseException $e) {
            self::assertSame(401, $e->getResponse()->getStatusCode());
        }
    }

    /**
     * Mutating verbs (POST/PUT/DELETE) stay eager: the 401 is parsed and thrown
     * at call time, not on first property access.
     */
    public function testPickupsCancelUnauthorizedEager(): void
    {
        try {
            $this->mockClient->expApiPickupsCancel('PRG999126012345', [
                'requestorName' => 'Jane Doe',
                'reason' => '00',
            ]);
            self::fail(\sprintf('Expected %s to be thrown.', BadResponseException::class));
        } catch (BadResponseException $e) {
            self::assertSame(401, $e->getResponse()->getStatusCode());
        }
    }
}
