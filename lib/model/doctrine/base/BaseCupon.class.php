<?php

/**
 * BaseCupon
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property varchar $cup_id
 * @property varchar $cup_name
 * @property datetime $cup_exp_date
 * @property int $cup_max_use
 * 
 * @method varchar  getCupId()        Returns the current record's "cup_id" value
 * @method varchar  getCupName()      Returns the current record's "cup_name" value
 * @method datetime getCupExpDate()   Returns the current record's "cup_exp_date" value
 * @method int      getCupMaxUse()    Returns the current record's "cup_max_use" value
 * @method Cupon    setCupId()        Sets the current record's "cup_id" value
 * @method Cupon    setCupName()      Sets the current record's "cup_name" value
 * @method Cupon    setCupExpDate()   Sets the current record's "cup_exp_date" value
 * @method Cupon    setCupMaxUse()    Sets the current record's "cup_max_use" value
 * 
 * @package    cuponspike
 * @subpackage model
 * @author     Jairo Guerra
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCupon extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('cupon');
        $this->hasColumn('cup_id', 'varchar', 36, array(
             'type' => 'varchar',
             'primary' => true,
             'length' => 36,
             ));
        $this->hasColumn('cup_name', 'varchar', 50, array(
             'type' => 'varchar',
             'notnull' => true,
             'length' => 50,
             ));
        $this->hasColumn('cup_exp_date', 'datetime', null, array(
             'type' => 'datetime',
             'notnull' => true,
             ));
        $this->hasColumn('cup_max_use', 'int', null, array(
             'type' => 'int',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}