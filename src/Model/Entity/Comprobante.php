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

}
