<?php
namespace cmspp\managers\interfaces\Service;

interface IControlManager extends IService
{
    public function getLine(): string;
    public function getFile(): string;
    public function getFromService(): string;
    public function getToService(): string;
    public function isValid(): bool;
}