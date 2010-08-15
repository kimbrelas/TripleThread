<?php


class ioPageTable extends PluginioPageTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('ioPage');
    }
}