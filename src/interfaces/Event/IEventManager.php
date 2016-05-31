<?php
namespace cmspp\serviceManager\interfaces\Event;
use cmspp\serviceManager\interfaces\Service\IService;
use cmspp\serviceManager\interfaces\Service\IServiceControl;
use cmspp\serviceManager\interfaces\Service\IServiceManager;

interface IEventManager
{
    public function add(string $toEvent, IService $currentEvent, IServiceControl $serviceControl): bool;
    public function remove(string $neededService, string $currentEvent, IServiceControl $serviceControl): bool;
    public function has(IServiceManager $serviceManager, string $serviceName): bool;
    
}