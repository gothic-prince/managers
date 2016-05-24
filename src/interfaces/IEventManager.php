<?php
namespace cmspp\serviceManager\interfaces;
use cmspp\events\models\events\interfaces\IEvent;

interface IEventManager extends IManager
{
    public function get(string $pluginName): IEvent;
}