<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PlaysOn Entity.
 *
 * @property int $pid
 * @property string $tname
 * @property int $NumberOfYears
 * @property \Cake\I18n\Time $startDate
 * @property \Cake\I18n\Time $endDate
 */
class PlaysOn extends Entity
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
        'pid' => false,
    ];
}
