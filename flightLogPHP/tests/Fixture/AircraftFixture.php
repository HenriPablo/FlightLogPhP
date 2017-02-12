<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AircraftFixture
 *
 */
class AircraftFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'aircraft';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'biginteger', 'length' => 20, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'aircraft_category' => ['type' => 'biginteger', 'length' => 20, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'aircraft_class' => ['type' => 'biginteger', 'length' => 20, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'aircraft_tail_number' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'aircraft_type' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'complex' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'hi_performance' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'nickname' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'aircraft_aircraft_category_id_fk' => ['type' => 'foreign', 'columns' => ['aircraft_category'], 'references' => ['aircraft_category', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'aircraft_aircraft_class_id_fk' => ['type' => 'foreign', 'columns' => ['aircraft_class'], 'references' => ['aircraft_class', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'aircraft_category' => 1,
            'aircraft_class' => 1,
            'aircraft_tail_number' => 'Lorem ipsum dolor sit amet',
            'aircraft_type' => 'Lorem ipsum dolor sit amet',
            'complex' => 1,
            'hi_performance' => 1,
            'nickname' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
