<?php
namespace cmspp\serviceManager\interfaces;
use cmspp\serviceManager\interfaces\Service\IService;
use cmspp\serviceManager\interfaces\Service\IControlManager;
use cmspp\serviceManager\interfaces\Service\IServiceManager;

interface IManager
{
    public function add(IServiceManager $serviceManager, IService $service, IControlManager $serviceControl): bool;
    public function remove(IServiceManager $serviceManager, string $serviceName, IControlManager $serviceControl): bool;
    public function has(IServiceManager $serviceManager, string $serviceName): bool;
}