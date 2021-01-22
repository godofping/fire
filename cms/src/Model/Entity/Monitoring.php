<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Monitoring Entity
 *
 * @property int $monitoringid
 * @property int|null $roomid
 * @property float|null $temperature
 * @property float|null $fire
 * @property float|null $gas
 * @property float|null $humidity
 * @property \Cake\I18n\FrozenTime|null $datetime
 */
class Monitoring extends Entity
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
        'roomid' => true,
        'temperature' => true,
        'fire' => true,
        'gas' => true,
        'humidity' => true,
        'datetime' => true,
    ];
}
