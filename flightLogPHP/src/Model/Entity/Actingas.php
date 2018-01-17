<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Actingas Entity
 *
 * @property string $title
 * @property int $id
 *
 * @property \App\Model\Entity\Crw[] $crw
 * @property \App\Model\Entity\Flight[] $flight
 */
class Actingas extends Entity
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
        'title' => true,
        'crw' => true,
        'flight' => true
    ];
}
