<?php
namespace cmspp\managers\interfaces\Service;

interface IService
{
    public function getType(): string;
    public function getName(): string;
    public function init(IServiceManager $serviceManager);
}