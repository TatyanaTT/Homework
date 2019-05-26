<?php
interface EntityManagerInterface{
    function getById(int $id);
    function save(BaseEntity $object);
}