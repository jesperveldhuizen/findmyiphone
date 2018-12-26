<?php

namespace FindMyiPhone;

/**
 * Class Location.
 */
class Location
{
    /** @var int */
    private $timestamp;

    /** @var int */
    private $horizontalAccuracy;

    /** @var string */
    private $positionType;

    /** @var float */
    private $longitude;

    /** @var float */
    private $latitude;

    /**
     * @param int    $timestamp
     * @param int    $horizontalAccuracy
     * @param string $positionType
     * @param float  $longitude
     * @param float  $latitude
     *
     * @return Location
     */
    public static function create(int $timestamp, int $horizontalAccuracy, string $positionType, float $longitude, float $latitude)
    {
        $location = new self();
        $location->setTimestamp($timestamp);
        $location->setHorizontalAccuracy($horizontalAccuracy);
        $location->setPositionType($positionType);
        $location->setLongitude($longitude);
        $location->setLatitude($latitude);

        return $location;
    }

    /**
     * @return int
     */
    public function getTimestamp(): int
    {
        return $this->timestamp;
    }

    /**
     * @param int $timestamp
     */
    public function setTimestamp(int $timestamp)
    {
        $this->timestamp = $timestamp;
    }

    /**
     * @return int
     */
    public function getHorizontalAccuracy(): int
    {
        return $this->horizontalAccuracy;
    }

    /**
     * @param int $horizontalAccuracy
     */
    public function setHorizontalAccuracy(int $horizontalAccuracy)
    {
        $this->horizontalAccuracy = $horizontalAccuracy;
    }

    /**
     * @return string
     */
    public function getPositionType(): string
    {
        return $this->positionType;
    }

    /**
     * @param string $positionType
     */
    public function setPositionType(string $positionType)
    {
        $this->positionType = $positionType;
    }

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     */
    public function setLongitude(float $longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     */
    public function setLatitude(float $latitude)
    {
        $this->latitude = $latitude;
    }
}
