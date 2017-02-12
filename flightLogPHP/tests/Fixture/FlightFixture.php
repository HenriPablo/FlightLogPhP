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
        'id' => ['type' => 'biginteger', 'length' => 20, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'actual_instrument' => ['type' => 'float', 'length' => null, 'default' => '0', 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'aircraft_id' => ['type' => 'biginteger', 'length' => 20, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'aircraft_category_and_class' => ['type' => 'float', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'aircraft_tail_number' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'aircraft_type' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'as_flight_instructor' => ['type' => 'float', 'length' => null, 'default' => '0', 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'cross_country' => ['type' => 'float', 'length' => null, 'default' => '0', 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'date' => ['type' => 'timestamp', 'length' => null, 'default' => 'now()', 'null' => false, 'comment' => null, 'precision' => null],
        'day' => ['type' => 'float', 'length' => null, 'default' => '0', 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'departure' => ['type' => 'biginteger', 'length' => 20, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'destination' => ['type' => 'biginteger', 'length' => 20, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'dual_received' => ['type' => 'float', 'length' => null, 'default' => '0', 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'extended_flight_details_id' => ['type' => 'biginteger', 'length' => 20, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'ground_trainer' => ['type' => 'float', 'length' => null, 'default' => '0', 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'instructor_id' => ['type' => 'biginteger', 'length' => 20, 'default' => '0', 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'night' => ['type' => 'float', 'length' => null, 'default' => '0', 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'no_day_landings' => ['type' => 'integer', 'length' => 10, 'default' => '0', 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'no_inst_aproaches' => ['type' => 'integer', 'length' => 10, 'default' => '0', 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'no_night_landings' => ['type' => 'integer', 'length' => 10, 'default' => '0', 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'pilot_in_command' => ['type' => 'float', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'remarks' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'route' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'safety_pilot_id' => ['type' => 'biginteger', 'length' => 20, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'second_in_command' => ['type' => 'float', 'length' => null, 'default' => '0', 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'simulated_instrument' => ['type' => 'float', 'length' => null, 'default' => '0', 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'story_id' => ['type' => 'biginteger', 'length' => 20, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'total_duration_of_flight' => ['type' => 'float', 'length' => null, 'default' => '0.1', 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        '_indexes' => [
            'fki_departure_fk' => ['type' => 'index', 'columns' => ['departure'], 'length' => []],
            'fki_destination_fk' => ['type' => 'index', 'columns' => ['destination'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'aircraft_id_fk' => ['type' => 'foreign', 'columns' => ['aircraft_id'], 'references' => ['aircraft', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'departure_fk' => ['type' => 'foreign', 'columns' => ['departure'], 'references' => ['airport', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'destination_fk' => ['type' => 'foreign', 'columns' => ['destination'], 'references' => ['airport', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'extended_flight_details_fk' => ['type' => 'foreign', 'columns' => ['extended_flight_details_id'], 'references' => ['flight_extended_details', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'instructor_id_fk' => ['type' => 'foreign', 'columns' => ['instructor_id'], 'references' => ['pilot', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'safety_pilot_fk' => ['type' => 'foreign', 'columns' => ['safety_pilot_id'], 'references' => ['pilot', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'story_id_fk' => ['type' => 'foreign', 'columns' => ['story_id'], 'references' => ['story', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'actual_instrument' => 1,
            'aircraft_id' => 1,
            'aircraft_category_and_class' => 1,
            'aircraft_tail_number' => 'Lorem ipsum dolor sit amet',
            'aircraft_type' => 'Lorem ipsum dolor sit amet',
            'as_flight_instructor' => 1,
            'cross_country' => 1,
            'date' => 1469495743,
            'day' => 1,
            'departure' => 1,
            'destination' => 1,
            'dual_received' => 1,
            'extended_flight_details_id' => 1,
            'ground_trainer' => 1,
            'instructor_id' => 1,
            'night' => 1,
            'no_day_landings' => 1,
            'no_inst_aproaches' => 1,
            'no_night_landings' => 1,
            'pilot_in_command' => 1,
            'remarks' => 'Lorem ipsum dolor sit amet',
            'route' => 'Lorem ipsum dolor sit amet',
            'safety_pilot_id' => 1,
            'second_in_command' => 1,
            'simulated_instrument' => 1,
            'story_id' => 1,
            'total_duration_of_flight' => 1
        ],
    ];
}
