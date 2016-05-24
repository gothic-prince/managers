<?php
namespace cmspp\serviceManager\interfaces;

use cmspp\events\models\events\interfaces\IEvent;
use cmspp\plugin\models\plugin\interfaces\IPlugin;

interface IService
{
    /**
     * Return type:
     * @see IEvent
     * @see IPlugin
     * @see IService
     * @return string
     */
    public function getType(): string;
    public function getName(): string;
    public function init(IServiceManager $serviceManager);
    public function getBehavior(IServiceManager $serviceManager): IBehavior;
}