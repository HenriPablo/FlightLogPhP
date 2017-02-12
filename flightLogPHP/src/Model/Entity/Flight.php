<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Flight Entity
 *
 * @property int $id
 * @property float $actual_instrument
 * @property int $aircraft_id
 * @property float $aircraft_category_and_class
 * @property string $aircraft_tail_number
 * @property string $aircraft_type
 * @property float $as_flight_instructor
 * @property float $cross_country
 * @property \Cake\I18n\Time $date
 * @property float $day
 * @property int $departure
 * @property int $destination
 * @property float $dual_received
 * @property int $extended_flight_details_id
 * @property float $ground_trainer
 * @property int $instructor_id
 * @property float $night
 * @property int $no_day_landings
 * @property int $no_inst_aproaches
 * @property int $no_night_landings
 * @property float $pilot_in_command
 * @property string $remarks
 * @property string $route
 * @property int $safety_pilot_id
 * @property float $second_in_command
 * @property float $simulated_instrument
 * @property int $story_id
 * @property float $total_duration_of_flight
 *
 * @property \App\Model\Entity\Aircraft $aircraft
 * @property \App\Model\Entity\FlightExtendedDetail[] $flight_extended_details
 * @property \App\Model\Entity\Pilot $pilot
 * @property \App\Model\Entity\Story[] $story
 * @property \App\Model\Entity\FlightPilotXref[] $flight_pilot_xref
 */
class Flight extends Entity
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
