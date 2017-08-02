<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ComprobantesFixture
 *
 */
class ComprobantesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID_COMP' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'COD_CLIENT' => ['type' => 'string', 'length' => 6, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'COD_VENDED' => ['type' => 'string', 'length' => 2, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'COND_VTA' => ['type' => 'string', 'length' => 3, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ESTADO' => ['type' => 'string', 'length' => 3, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'FECHA_EMIS' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => '1800-01-01 00:00:00', 'comment' => '', 'precision' => null],
        'FECHA_CANC' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => '1800-01-01 00:00:00', 'comment' => '', 'precision' => null],
        'N_COMP' => ['type' => 'string', 'length' => 13, 'null' => false, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'T_COMP' => ['type' => 'string', 'length' => 3, 'null' => false, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'IMPORTE' => ['type' => 'decimal', 'length' => 22, 'precision' => 7, 'unsigned' => false, 'null' => true, 'default' => '0.0000000', 'comment' => ''],
        'COBRADO' => ['type' => 'decimal', 'length' => 22, 'precision' => 7, 'unsigned' => false, 'null' => true, 'default' => '0.0000000', 'comment' => ''],
        'SALDO' => ['type' => 'decimal', 'length' => 22, 'precision' => 7, 'unsigned' => false, 'null' => true, 'default' => '0.0000000', 'comment' => ''],
        '_indexes' => [
            'COD_CLIENT' => ['type' => 'index', 'columns' => ['COD_CLIENT'], 'length' => []],
            'COD_VENDED' => ['type' => 'index', 'columns' => ['COD_VENDED'], 'length' => []],
            'COND_VTA' => ['type' => 'index', 'columns' => ['COND_VTA'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['N_COMP', 'T_COMP'], 'length' => []],
            'ID_COMP' => ['type' => 'unique', 'columns' => ['ID_COMP'], 'length' => []],
            'comprobantes_ibfk_1' => ['type' => 'foreign', 'columns' => ['COD_CLIENT'], 'references' => ['clientes', 'COD_CLIENT'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'comprobantes_ibfk_2' => ['type' => 'foreign', 'columns' => ['COD_VENDED'], 'references' => ['vendedores', 'COD_VENDED'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'comprobantes_ibfk_3' => ['type' => 'foreign', 'columns' => ['COND_VTA'], 'references' => ['planes', 'COND_VTA'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
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
            'ID_COMP' => 1,
            'COD_CLIENT' => 'Lore',
            'COD_VENDED' => '',
            'COND_VTA' => 'L',
            'ESTADO' => 'L',
            'FECHA_EMIS' => '2017-08-02 20:48:48',
            'FECHA_CANC' => '2017-08-02 20:48:48',
            'N_COMP' => '32e47909-ec9a-4821-abda-1ece02533fb7',
            'T_COMP' => 'b9966dcd-9e21-4069-a776-041bc3ac9ad8',
            'IMPORTE' => 1.5,
            'COBRADO' => 1.5,
            'SALDO' => 1.5
        ],
    ];
}
