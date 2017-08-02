<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cuota Entity
 *
 * @property int $ID_CUOTA
 * @property string $ESTADO_VTO
 * @property \Cake\I18n\FrozenTime $FECHA_VTO
 * @property float $IMPORTE_VT
 * @property string $N_COMP
 * @property string $T_COMP
 * @property string $N_COMP_CAN
 * @property string $T_COMP_CAN
 */
class Cuota extends Entity
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
        'N_COMP_CAN' => false,
        'T_COMP_CAN' => false
    ];
}
