<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pilot Entity
 *
 * @property int $id
 * @property string $address1
 * @property string $address2
 * @property string $phone
 * @property string $certificate_no
 * @property string $city
 * @property string $email
 * @property string $first_name
 * @property string $land_line
 * @property string $last_name
 * @property string $notes
 * @property string $state
 * @property string $zip
 * @property string $class
 * @property string $description
 * @property bool $email_show
 * @property bool $enabled
 * @property string $passwd
 * @property string $user_real_name
 * @property string $username
 *
 * @property \App\Model\Entity\FlightPilotXref[] $flight_pilot_xref
 * @property \App\Model\Entity\PilotPilotRoleXref[] $pilot_pilot_role_xref
 */
class Pilot extends Entity
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

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'passwd'
    ];
}
