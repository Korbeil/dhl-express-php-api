<?php

declare(strict_types=1);

namespace Korbeil\DHLExpress;

use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use Jane\Component\OpenApiRuntime\Client\Plugin\ServerUrlHttpClient;
use Korbeil\DHLExpress\Api\Authentication\BasicAuthAuthentication;
use Korbeil\DHLExpress\Api\Client;
use Symfony\Component\HttpClient\CurlHttpClient;

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
        return Client::create(
            new CurlHttpClient(),
            [
                // The spec's first servers entry is the mock URL: rewrite every request
                // to the URL chosen here instead of the one baked into the client.
                new ServerUrlHttpClient($apiUrl),
                new AuthenticationRegistry([
                    new BasicAuthAuthentication($this->dhlExpressUsername, $this->dhlExpressPassword),
                ]),
            ],
            [],
            false,
        );
    }
}
