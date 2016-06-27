<?php
namespace cmspp\managers\interfaces\Service;
use cmspp\events\interfaces\dependencies\IDependencies;
use cmspp\events\interfaces\info\IEventInfo;

interface IService
{
    public function getInfo(): IEventInfo;
    public function init();
    public function getDependencies(): IDependencies;
}