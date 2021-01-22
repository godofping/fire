<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employee Entity
 *
 * @property int $employeeid
 * @property int|null $positionid
 * @property int|null $departmentid
 * @property string|null $fullname
 * @property string|null $contactnumber
 *
 * @property \App\Model\Entity\Position $position
 */
class Employee extends Entity
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
        'positionid' => true,
        'departmentid' => true,
        'fullname' => true,
        'contactnumber' => true,
        'position' => true,
    ];
}
