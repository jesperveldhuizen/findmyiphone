<?php

declare(strict_types=1);

namespace Fieldhousen\FindMy;

use Fieldhousen\FindMy\DTO\Device;
use Symfony\Component\HttpClient\HttpClient;

class Client
{
    private const ICLOUD_URL = 'https://fmipmobile.icloud.com';

    public function __construct(
        private string $username,
        private string $password
    ) {
    }

    public function getDevices(): array
    {
        $client = HttpClient::createForBaseUri(self::ICLOUD_URL, [
            'auth_basic' => [$this->username, $this->password],
            'headers' => [
                'User-Agent' => 'FindMyiPhone/472.1 CFNetwork/711.1.12 Darwin/14.0.0',
                'X-Apple-Realm-Support' => '1.0',
                'X-Apple-Find-API-Ver' => '3.0',
                'X-Apple-AuthScheme' => 'UserIdGuest',
            ],
            'verify_host' => false,
            'verify_peer' => false,
        ]);

        $url = sprintf('fmipservice/device/%s/initClient', $this->username);
        $response = $client->request('POST', $url);

        if ($response->getStatusCode() === 401) {
            throw new \RuntimeException('Credentials are incorrect!');
        }

        if ($response->getStatusCode() !== 200) {
            throw new \RuntimeException('Could not load devices!');
        }

        $body = json_decode($response->getContent(), true);

        $devices = [];
        foreach ($body['content'] as $row) {
            $devices[] = Device::create($row);
        }

        return $devices;
    }
}
