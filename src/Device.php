<?php

declare(strict_types=1);

namespace FindMyiPhone;

class Device
{
    private ?Location $location;

    public function __construct(
        private string $id,
        private float $batteryLevel,
        private string $batteryStatus,
        private string $class,
        private string $displayName,
        private string $model,
        private string $modelDisplayName,
        private string $name
    ) {
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

    public function getBatteryLevel(): float
    {
        return $this->batteryLevel;
    }

    public function setBatteryLevel(float $batteryLevel): void
    {
        $this->batteryLevel = $batteryLevel;
    }

    public function getBatteryStatus(): string
    {
        return $this->batteryStatus;
    }

    public function setBatteryStatus(string $batteryStatus): void
    {
        $this->batteryStatus = $batteryStatus;
    }

    public function getClass(): string
    {
        return $this->class;
    }

    public function setClass(string $class): void
    {
        $this->class = $class;
    }

    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    public function setDisplayName(string $displayName): void
    {
        $this->displayName = $displayName;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    public function getModelDisplayName(): string
    {
        return $this->modelDisplayName;
    }

    public function setModelDisplayName(string $modelDisplayName): void
    {
        $this->modelDisplayName = $modelDisplayName;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
