<?php
namespace cmspp\serviceManager\classes;

use cmspp\serviceManager\interfaces\Service\IService;
use cmspp\serviceManager\interfaces\Service\IControlManager;
use cmspp\serviceManager\interfaces\Service\IServiceManager;

class EmptyServiceManager implements IServiceManager
{
    public function add(IServiceManager $serviceManager, IService $service, IControlManager $serviceControl): bool
    {
        // TODO: Implement add() method.
    }

    public function remove(IServiceManager $serviceManager, string $serviceName, IControlManager $serviceControl): bool
    {
        // TODO: Implement remove() method.
    }

    public function has(IServiceManager $serviceManager, string $serviceName): bool
    {
        // TODO: Implement has() method.
    }

    public function get(string $serviceName): IService
    {
        // TODO: Implement get() method.
    }
}