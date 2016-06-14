<?php
namespace cmspp\managers\interfaces\Service;

use cmspp\managers\interfaces\IManager;

interface IServiceManager extends IManager
{
    public function get(string $serviceName): IService;
}