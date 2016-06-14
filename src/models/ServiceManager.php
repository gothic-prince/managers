<?php
namespace cmspp\managers\models;
use cmspp\managers\interfaces\Service\IControlManager;
use cmspp\managers\interfaces\Service\IService;
use cmspp\managers\interfaces\Service\IServiceManager;

class ServiceManager implements IServiceManager
{
    /**
     * @var IService[]
     */
    protected $services;
    public function add(IServiceManager $serviceManager, IService $service, IControlManager $serviceControl): bool
    {
        if (isset($this->services[$service->getName()]))
            return false;
        $this->services[$service->getName()] = $service;
        return true;
    }

    public function remove(IServiceManager $serviceManager, string $serviceName, IControlManager $serviceControl): bool
    {
        unset($this->services[$serviceName]);
        return true;
    }

    public function has(IServiceManager $serviceManager, string $serviceName): bool
    {
        return isset($this->services[$serviceName]);
    }

    public function get(string $serviceName): IService
    {
        return $this->services[$serviceName];
    }
}