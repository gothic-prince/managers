<?php
namespace cmspp\serviceManager\interfaces;
use cmspp\plugin\models\plugin\interfaces\IPlugin;

interface IPluginManager extends IManager
{
    public function get(string $pluginName): IPlugin;
}