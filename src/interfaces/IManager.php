<?php
namespace cmspp\serviceManager\interfaces;
use cmspp\events\models\events\interfaces\IWhereExecuted;

interface IManager
{
    public function add(IService $service, IWhereExecuted $whereExecuted): bool;
    public function remove(string $serviceName, IWhereExecuted $whereExecuted): bool;
    public function has(string $serviceName): bool;
}