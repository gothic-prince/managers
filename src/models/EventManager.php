<?php
namespace cmspp\managers\models;

use cmspp\managers\interfaces\Event\IEventCompositeFactory;
use cmspp\managers\interfaces\Event\IEventManager;
use cmspp\managers\interfaces\Service\IControlManager;
use cmspp\managers\interfaces\Service\IService;
use cmspp\managers\interfaces\Service\IServiceManager;

class EventManager implements IEventManager
{
    /**
     * @var IEventCompositeFactory
     */
    protected $eventCompositeFactory = null;

    public function setEventCompositeFactory(IEventCompositeFactory $eventCompositeFactory)
    {
        $this->eventCompositeFactory = $eventCompositeFactory;
        return $this;
    }

    public function add(string $toEvent, IService $currentEvent, IControlManager $serviceControl): bool
    {
        // TODO: Implement add() method.
    }

    public function remove(string $neededService, string $currentEvent, IControlManager $serviceControl): bool
    {
        // TODO: Implement remove() method.
    }

    public function has(IServiceManager $serviceManager, string $serviceName): bool
    {
        // TODO: Implement has() method.
    }
}