<?php
namespace cmspp\managers\interfaces\Event;

use cmspp\events\interfaces\composites\IEventComposite;

interface IEventCompositeManager
{
    public function getEventComposite($eventName): IEventComposite;
    public function getEventComposites(): array;
    public function remove($eventName);
    public function add(IEventComposite $eventComposite);
    public function append(IEventComposite $toEventComposite, IEventComposite $currentEventComposite);

}