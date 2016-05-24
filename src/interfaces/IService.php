<?php
namespace cmspp\serviceManager\interfaces;

interface IService
{
    public function getBehavior(IServiceManager $serviceManager): IBehavior;
}