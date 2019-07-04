<?php
namespace Entity;
error_reporting(E_ALL);
ini_set('display_errors','On');
abstract class EntityManager{
    protected $myDB;

    /**
     * EntityManager constructor.
     * @param $myDB
     */
    abstract function __construct(MysqlConfig $myDB);
    abstract function getById(int $id);
    abstract function save(BaseEntity $object);
}