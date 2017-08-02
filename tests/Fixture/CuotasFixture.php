<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CuotasFixture
 *
 */
class CuotasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID_CUOTA' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'ESTADO_VTO' => ['type' => 'string', 'length' => 3, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'FECHA_VTO' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => '1800-01-01 00:00:00', 'comment' => '', 'precision' => null],
        'IMPORTE_VT' => ['type' => 'decimal', 'length' => 22, 'precision' => 7, 'unsigned' => false, 'null' => true, 'default' => '0.0000000', 'comment' => ''],
        'N_COMP' => ['type' => 'string', 'length' => 13, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'T_COMP' => ['type' => 'string', 'length' => 3, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'N_COMP_CAN' => ['type' => 'string', 'length' => 13, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'T_COMP_CAN' => ['type' => 'string', 'length' => 3, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'FECHA_CAN' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => '1800-01-01 00:00:00', 'comment' => '', 'precision' => null],
        '_constraints' => [
            'ID_CUOTA' => ['type' => 'unique', 'columns' => ['ID_CUOTA'], 'length' => []],
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
            'ID_CUOTA' => 1,
            'ESTADO_VTO' => 'L',
            'FECHA_VTO' => '2017-08-02 13:02:43',
            'IMPORTE_VT' => 1.5,
            'N_COMP' => 'Lorem ipsum',
            'T_COMP' => 'L',
            'N_COMP_CAN' => 'Lorem ipsum',
            'T_COMP_CAN' => 'L',
            'FECHA_CAN' => '2017-08-02 13:02:43'
        ],
    ];
}
