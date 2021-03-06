<?php

/**
 * BaseAppInfo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property varchar $app_field
 * @property varchar $app_value
 * 
 * @method varchar getAppField()  Returns the current record's "app_field" value
 * @method varchar getAppValue()  Returns the current record's "app_value" value
 * @method AppInfo setAppField()  Sets the current record's "app_field" value
 * @method AppInfo setAppValue()  Sets the current record's "app_value" value
 * 
 * @package    cuponspike
 * @subpackage model
 * @author     Jairo Guerra
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAppInfo extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('app_info');
        $this->hasColumn('app_field', 'varchar', 15, array(
             'type' => 'varchar',
             'notnull' => true,
             'length' => 15,
             ));
        $this->hasColumn('app_value', 'varchar', 15, array(
             'type' => 'varchar',
             'notnull' => true,
             'length' => 15,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}