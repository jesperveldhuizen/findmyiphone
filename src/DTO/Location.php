<?php

declare(strict_types=1);

namespace Fieldhousen\FindMy\DTO;

class Location
{
    public function __construct(
        private int $timestamp,
        private float $horizontalAccuracy,
        private string $positionType,
        private float $longitude,
        private float $latitude
    ) {
    }

    public function getTimestamp(): int
    {
        return $this->timestamp;
    }

    public function setTimestamp(int $timestamp): void
    {
        $this->timestamp = $timestamp;
    }

    public function getHorizontalAccuracy(): float
    {
        return $this->horizontalAccuracy;
    }

    public function setHorizontalAccuracy(float $horizontalAccuracy): void
    {
        $this->horizontalAccuracy = $horizontalAccuracy;
    }

    public function getPositionType(): string
    {
        return $this->positionType;
    }

    public function setPositionType(string $positionType): void
    {
        $this->positionType = $positionType;
    }

    public function getLongitude(): float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): void
    {
        $this->longitude = $longitude;
    }

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): void
    {
        $this->latitude = $latitude;
    }
}
