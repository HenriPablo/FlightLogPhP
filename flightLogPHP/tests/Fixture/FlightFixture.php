<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FlightFixture
 *
 */
class FlightFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'flight';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'date' => ['type' => 'timestamp', 'length' => null, 'default' => 'now()', 'null' => false, 'comment' => null, 'precision' => null],
        'total_duration_of_flight' => ['type' => 'float', 'length' => null, 'default' => '0.1', 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
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
            'date' => 1516037104,
            'total_duration_of_flight' => 1,
            'id' => 1
        ],
    ];
}
