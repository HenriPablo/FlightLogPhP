<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FlightExtendedDetail Entity
 *
 * @property int $id
 * @property int $flight_id
 * @property int $glider_tows
 * @property int $skydive_loads
 *
 * @property \App\Model\Entity\Flight $flight
 */
class FlightExtendedDetail extends Entity
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
