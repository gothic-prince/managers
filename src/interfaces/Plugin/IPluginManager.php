<?php
namespace cmspp\serviceManager\interfaces\Plugin;
use cmspp\plugin\models\plugin\interfaces\IPlugin;
use cmspp\serviceManager\interfaces\IManager;

interface IPluginManager extends IManager
{
    public function get(string $pluginName): IPlugin;
}