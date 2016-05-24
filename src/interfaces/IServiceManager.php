<?php
namespace cmspp\serviceManager\interfaces;


interface IServiceManager extends IManager
{
    public function get(string $serviceName): IService;
}