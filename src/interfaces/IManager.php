<?php
namespace cmspp\managers\interfaces;
use cmspp\managers\interfaces\Service\IService;
use cmspp\managers\interfaces\Service\IControlManager;
use cmspp\managers\interfaces\Service\IServiceManager;

interface IManager
{
    public function add(IServiceManager $serviceManager, IService $service, IControlManager $serviceControl): bool;
    public function remove(IServiceManager $serviceManager, string $serviceName, IControlManager $serviceControl): bool;
    public function has(IServiceManager $serviceManager, string $serviceName): bool;
}