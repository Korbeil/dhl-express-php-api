<?php

declare(strict_types=1);

namespace Korbeil\DHLExpress;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Discovery\Psr17FactoryDiscovery;
use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use Korbeil\DHLExpress\Api\Authentication\BasicAuthAuthentication;
use Korbeil\DHLExpress\Api\Client;
use Symfony\Component\HttpClient\CurlHttpClient;
use Symfony\Component\HttpClient\Psr18Client;

final class ClientFactory
{
    private const DHL_EXPRESS_MOCK_API_URL = 'https://api-mock.dhl.com/mydhlapi';

    public function __construct(
        private string $dhlExpressUrl,
        private string $dhlExpressUsername,
        private string $dhlExpressPassword,
    ) {
    }

    public function getClient(): Client
    {
        return $this->buildClient($this->dhlExpressUrl);
    }

    public function getMockClient(): Client
    {
        return $this->buildClient(self::DHL_EXPRESS_MOCK_API_URL);
    }

    private function buildClient(string $apiUrl): Client
    {
        $httpClient = new Psr18Client(new CurlHttpClient(['base_uri' => $apiUrl]));
        $dhlExpressUri = Psr17FactoryDiscovery::findUriFactory()->createUri($apiUrl);

        return Client::create(
            $httpClient,
            [
                new AddHostPlugin($dhlExpressUri),
                new AddPathPlugin($dhlExpressUri),
                new AuthenticationRegistry([new BasicAuthAuthentication($this->dhlExpressUsername, $this->dhlExpressPassword)]),
            ]
        );
    }
}
