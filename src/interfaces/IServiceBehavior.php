<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 24.05.2016
 * Time: 20:24
 */

namespace cmspp\serviceManager\interfaces;


use cmspp\events\models\events\interfaces\IEvent;

interface IBehavior
{
    public function onAdd(IServiceManager $serviceManager, IEvent $event): bool;
    public function onRemove(IServiceManager $serviceManager, IEvent $event): bool;
    public function onHas(IServiceManager $serviceManager, IEvent $event): bool;
    public function onGet(IServiceManager $serviceManager, IEvent $event): bool;

}