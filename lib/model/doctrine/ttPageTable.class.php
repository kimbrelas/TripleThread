<?php


class ttPageTable extends ioPageTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('ttPage');
    }
}