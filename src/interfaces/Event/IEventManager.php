<?php
namespace cmspp\managers\interfaces\Event;
use cmspp\events\interfaces\IEvent;

interface IEventManager
{
    public function add(string $toEvent, IEvent $currentEvent): bool;
    public function remove(string $neededEvent, string $currentEvent): bool;
    public function has(string $serviceName): bool;
}