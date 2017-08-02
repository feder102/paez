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
        'N_COMP' => ['type' => 'string', 'length' => 13, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'T_COMP' => ['type' => 'string', 'length' => 3, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'IMPORTE' => ['type' => 'decimal', 'length' => 22, 'precision' => 7, 'unsigned' => false, 'null' => true, 'default' => '0.0000000', 'comment' => ''],
        'COBRADO' => ['type' => 'decimal', 'length' => 22, 'precision' => 7, 'unsigned' => false, 'null' => true, 'default' => '0.0000000', 'comment' => ''],
        'SALDO' => ['type' => 'decimal', 'length' => 22, 'precision' => 7, 'unsigned' => false, 'null' => true, 'default' => '0.0000000', 'comment' => ''],
        '_constraints' => [
            'ID_COMP' => ['type' => 'unique', 'columns' => ['ID_COMP'], 'length' => []],
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
            'ID_COMP' => 1,
            'COD_CLIENT' => 'Lore',
            'COD_VENDED' => '',
            'COND_VTA' => 'L',
            'ESTADO' => 'L',
            'FECHA_EMIS' => '2017-08-02 13:03:07',
            'FECHA_CANC' => '2017-08-02 13:03:07',
            'N_COMP' => 'Lorem ipsum',
            'T_COMP' => 'L',
            'IMPORTE' => 1.5,
            'COBRADO' => 1.5,
            'SALDO' => 1.5
        ],
    ];
}
