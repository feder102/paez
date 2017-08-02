<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClientesFixture
 *
 */
class ClientesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID_CLIENTE' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'COD_CLIENT' => ['type' => 'string', 'length' => 6, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'RAZON_SOCI' => ['type' => 'string', 'length' => 60, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'COD_VENDED' => ['type' => 'string', 'length' => 2, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'COD_ZONA' => ['type' => 'string', 'length' => 2, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'COND_VTA' => ['type' => 'string', 'length' => 3, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'CUIT' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'CUPO_CREDI' => ['type' => 'decimal', 'length' => 22, 'precision' => 7, 'unsigned' => false, 'null' => true, 'default' => '0.0000000', 'comment' => ''],
        'DOMICILIO' => ['type' => 'string', 'length' => 250, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'E_MAIL' => ['type' => 'string', 'length' => 60, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'FECHA_ALTA' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => '1800-01-01 00:00:00', 'comment' => '', 'precision' => null],
        'LOCALIDAD' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'C_POSTAL' => ['type' => 'string', 'length' => 8, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'PROVINCIA' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'NOM_COM' => ['type' => 'string', 'length' => 60, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'DIR_COM' => ['type' => 'string', 'length' => 250, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'TELEFONO_1' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'TELEFONO_2' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'TIPO_DOC' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'ID_CLIENTE' => ['type' => 'unique', 'columns' => ['ID_CLIENTE'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'MyISAM',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'ID_CLIENTE' => 1,
            'COD_CLIENT' => 'Lore',
            'RAZON_SOCI' => 'Lorem ipsum dolor sit amet',
            'COD_VENDED' => '',
            'COD_ZONA' => '',
            'COND_VTA' => 'L',
            'CUIT' => 'Lorem ipsum dolor ',
            'CUPO_CREDI' => 1.5,
            'DOMICILIO' => 'Lorem ipsum dolor sit amet',
            'E_MAIL' => 'Lorem ipsum dolor sit amet',
            'FECHA_ALTA' => '2017-08-02 13:02:35',
            'LOCALIDAD' => 'Lorem ipsum dolor sit amet',
            'C_POSTAL' => 'Lorem ',
            'PROVINCIA' => 'Lorem ipsum dolor sit amet',
            'NOM_COM' => 'Lorem ipsum dolor sit amet',
            'DIR_COM' => 'Lorem ipsum dolor sit amet',
            'TELEFONO_1' => 'Lorem ipsum dolor sit amet',
            'TELEFONO_2' => 'Lorem ipsum dolor sit amet',
            'TIPO_DOC' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
