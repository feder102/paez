<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Comprobante Entity
 *
 * @property int $ID_COMP
 * @property string $COD_CLIENT
 * @property string $COD_VENDED
 * @property string $COND_VTA
 * @property string $ESTADO
 * @property \Cake\I18n\FrozenTime $FECHA_EMIS
 * @property \Cake\I18n\FrozenTime $FECHA_CANC
 * @property string $N_COMP
 * @property string $T_COMP
 * @property float $IMPORTE
 * @property float $COBRADO
 * @property float $SALDO
 */
class Comprobante extends Entity
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
        'N_COMP' => false,
        'T_COMP' => false
    ];
}
