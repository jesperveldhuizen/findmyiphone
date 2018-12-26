<?php

namespace FindMyiPhone;

/**
 * Class Device.
 */
class Device
{
    /** @var string */
    private $ID;

    /** @var float */
    private $batteryLevel;

    /** @var string */
    private $batteryStatus;

    /** @var string */
    private $class;

    /** @var string */
    private $displayName;

    /** @var string */
    private $model;

    /** @var string */
    private $modelDisplayName;

    /** @var string */
    private $name;

    /** @var Location */
    private $location;

    /**
     * @param string $ID
     * @param float  $batteryLevel
     * @param string $batteryStatus
     * @param string $class
     * @param string $displayName
     * @param string $model
     * @param string $modelDisplayName
     * @param string $name
     *
     * @return Device
     */
    public static function create(string $ID, float $batteryLevel, string $batteryStatus, string $class, string $displayName, string $model, string $modelDisplayName, string $name)
    {
        $device = new self();
        $device->setID($ID);
        $device->setBatteryLevel($batteryLevel);
        $device->setBatteryStatus($batteryStatus);
        $device->setClass($class);
        $device->setDisplayName($displayName);
        $device->setModel($model);
        $device->setModelDisplayName($modelDisplayName);
        $device->setName($name);

        return $device;
    }

    /**
     * @return string
     */
    public function getID(): string
    {
        return $this->ID;
    }

    /**
     * @param string $ID
     */
    public function setID(string $ID)
    {
        $this->ID = $ID;
    }

    /**
     * @return float
     */
    public function getBatteryLevel(): float
    {
        return $this->batteryLevel;
    }

    /**
     * @param float $batteryLevel
     */
    public function setBatteryLevel(float $batteryLevel)
    {
        $this->batteryLevel = $batteryLevel;
    }

    /**
     * @return string
     */
    public function getBatteryStatus(): string
    {
        return $this->batteryStatus;
    }

    /**
     * @param string $batteryStatus
     */
    public function setBatteryStatus(string $batteryStatus)
    {
        $this->batteryStatus = $batteryStatus;
    }

    /**
     * @return string
     */
    public function getClass(): string
    {
        return $this->class;
    }

    /**
     * @param string $class
     */
    public function setClass(string $class)
    {
        $this->class = $class;
    }

    /**
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     */
    public function setDisplayName(string $displayName)
    {
        $this->displayName = $displayName;
    }

    /**
     * @return Location
     */
    public function getLocation(): Location
    {
        return $this->location;
    }

    /**
     * @param Location $location
     */
    public function setLocation(Location $location)
    {
        $this->location = $location;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel(string $model)
    {
        $this->model = $model;
    }

    /**
     * @return string
     */
    public function getModelDisplayName(): string
    {
        return $this->modelDisplayName;
    }

    /**
     * @param string $modelDisplayName
     */
    public function setModelDisplayName(string $modelDisplayName)
    {
        $this->modelDisplayName = $modelDisplayName;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }
}
