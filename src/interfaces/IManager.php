<?php
namespace cmspp\serviceManager\interfaces;
use cmspp\serviceManager\interfaces\Service\IService;
use cmspp\serviceManager\interfaces\Service\IServiceControl;
use cmspp\serviceManager\interfaces\Service\IServiceManager;

interface IManager
{
    public function add(IServiceManager $serviceManager, IService $service, IServiceControl $serviceControl): bool;
    public function remove(IServiceManager $serviceManager, string $serviceName, IServiceControl $serviceControl): bool;
    public function has(IServiceManager $serviceManager, string $serviceName): bool;
}