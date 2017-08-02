<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $ID_CLIENTE
 * @property string $COD_CLIENT
 * @property string $RAZON_SOCI
 * @property string $COD_VENDED
 * @property string $COD_ZONA
 * @property string $COND_VTA
 * @property string $CUIT
 * @property float $CUPO_CREDI
 * @property string $DOMICILIO
 * @property string $E_MAIL
 * @property \Cake\I18n\FrozenTime $FECHA_ALTA
 * @property string $LOCALIDAD
 * @property string $C_POSTAL
 * @property string $PROVINCIA
 * @property string $NOM_COM
 * @property string $DIR_COM
 * @property string $TELEFONO_1
 * @property string $TELEFONO_2
 * @property string $TIPO_DOC
 */
class Cliente extends Entity
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
        'COD_CLIENT' => false
    ];
}
