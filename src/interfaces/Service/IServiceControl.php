<?php
namespace cmspp\serviceManager\interfaces\Service;

interface IServiceControl extends IService
{
    public function getLine(): string;
    public function getFile(): string;
    public function getFromService(): string;
    public function getToService(): string;
    public function isValid(): bool;
}