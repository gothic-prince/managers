<?php
namespace cmspp\serviceManager\interfaces\Service;

interface IService
{
    public function getType(): string;
    public function getName(): string;
    public function init(IServiceManager $serviceManager);
}