<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Plane Entity
 *
 * @property int $ID_PLAN
 * @property string $COND_VTA
 * @property string $DESC_COND
 * @property int $CANT_CUOTA
 * @property string $DIA_MES
 */
class Plane extends Entity
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
        'COND_VTA' => false
    ];
}
