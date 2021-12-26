<?php

declare(strict_types=1);

namespace Fieldhousen\FindMy\DTO;

class Device
{
    private ?Location $location = null;

    public function __construct(
        private string $id,
        private string $name,
        private string $deviceName,
        private string $modelName
    ) {
    }

    public static function create(array $data): self
    {
        $device = new self($data['id'], $data['name'], $data['deviceDisplayName'], $data['modelDisplayName']);

        if (!is_array($data['location'])) {
            return $device;
        }

        $location = new Location($data['location']['timeStamp'], (float) $data['location']['longitude'], (float) $data['location']['latitude']);
        $device->setLocation($location);

        return $device;
    }

    public function getLocation(): ?Location
    {
        return $this->location;
    }

    public function setLocation(?Location $location): void
    {
        $this->location = $location;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDeviceName(): string
    {
        return $this->deviceName;
    }

    public function setDeviceName(string $deviceName): void
    {
        $this->deviceName = $deviceName;
    }

    public function getModelName(): string
    {
        return $this->modelName;
    }

    public function setModelName(string $modelName): void
    {
        $this->modelName = $modelName;
    }
}
