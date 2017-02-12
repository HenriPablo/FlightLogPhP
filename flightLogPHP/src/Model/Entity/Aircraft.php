<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Aircraft Entity
 *
 * @property int $id
 * @property int $aircraft_category
 * @property int $aircraft_class
 * @property string $aircraft_tail_number
 * @property string $aircraft_type
 * @property bool $complex
 * @property bool $hi_performance
 * @property string $nickname
 *
 * @property \App\Model\Entity\Flight[] $flight
 */
class Aircraft extends Entity
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
