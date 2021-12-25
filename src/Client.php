<?php

declare(strict_types=1);

namespace FindMyiPhone;

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
        $client = new \GuzzleHttp\Client([
            'base_uri' => self::ICLOUD_URL,
        ]);

        $response = $client->request('POST', 'fmipservice/device/'.$this->username.'/initClient', [
            'auth' => [$this->username, $this->password],
            'verify' => false,
            'headers' => [
                'User-Agent' => 'FindMyiPhone/472.1 CFNetwork/711.1.12 Darwin/14.0.0',
                'X-Apple-Realm-Support' => '1.0',
                'X-Apple-Find-API-Ver' => '3.0',
                'X-Apple-AuthScheme' => 'UserIdGuest',
            ],
        ]);

        $body = json_decode($response->getBody()->getContents(), true);
        if (empty($body)) {
            throw new \UnderflowException('No devices found');
        }

        $devices = [];
        foreach ($body['content'] as $row) {
            $device = $this->generateDevice($row);
            $devices[$device->getID()] = $device;
        }

        return $devices;
    }

    private function generateDevice(array $data): Device
    {
        $device = new Device($data['id'], $data['batteryLevel'], $data['batteryStatus'], $data['deviceClass'], $data['deviceDisplayName'], $data['rawDeviceModel'], $data['modelDisplayName'], $data['name']);

        if (is_array($data['location'])) {
            $location = new Location($data['location']['timeStamp'], $data['location']['horizontalAccuracy'], $data['location']['positionType'], $data['location']['longitude'], $data['location']['latitude']);
            $device->setLocation($location);
        }

        return $device;
    }
}
