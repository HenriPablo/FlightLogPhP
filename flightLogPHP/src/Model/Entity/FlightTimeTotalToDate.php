<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FlightTimeTotalToDate Entity
 *
 * @property int $id
 * @property float $actual_instrument
 * @property float $airplane_multi_engine_land
 * @property float $airplane_singe_engine_land
 * @property float $as_flight_instructor
 * @property float $cross_country
 * @property float $cross_country_inst_received
 * @property float $cross_country_pic
 * @property float $cross_country_solo
 * @property float $day
 * @property float $dual_received
 * @property float $ground_trainer
 * @property float $instrument
 * @property float $night
 * @property float $night_instruction_received
 * @property float $night_pic
 * @property float $night_pic_solo
 * @property int $night_take_off_and_landing_solo
 * @property int $night_take_off_and_landings
 * @property int $no_instrument_approaches
 * @property int $no_landing
 * @property float $pilot_in_command
 * @property float $rotorcraft_helicopter
 * @property float $second_in_command
 * @property float $simulated_instrument
 * @property float $solo
 * @property float $total_duration_of_flight
 * @property string|resource $total_time_per_aircraft_type
 */
class FlightTimeTotalToDate extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
