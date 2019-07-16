<?php
namespace Service;
error_reporting(E_ALL);
ini_set('display_errors','On');

use Entity\BaseEntity;

abstract class EntityManager{
    protected $myDB;

    /**
     * EntityManager constructor
     */
    abstract function __construct();
    abstract function getById(int $id): ?BaseEntity;
    abstract function save(BaseEntity $object);
}