<?php
namespace cmspp\serviceManager\interfaces\Service;
use cmspp\serviceManager\interfaces\IManager;

interface IServiceManager extends IManager
{
    public function get(string $serviceName): IService;
}