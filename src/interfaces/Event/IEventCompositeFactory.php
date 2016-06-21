<?php
namespace cmspp\managers\interfaces\Event;
use cmspp\events\interfaces\composites\IEventComposite;

interface IEventCompositeFactory
{
    public function getEventComposite(): IEventComposite;
}