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
        'N_COMP_CAN' => ['type' => 'string', 'length' => 13, 'null' => false, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'T_COMP_CAN' => ['type' => 'string', 'length' => 3, 'null' => false, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'N_COMP' => ['type' => 'index', 'columns' => ['N_COMP', 'T_COMP'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['N_COMP_CAN', 'T_COMP_CAN'], 'length' => []],
            'ID_CUOTA' => ['type' => 'unique', 'columns' => ['ID_CUOTA'], 'length' => []],
            'cuotas_ibfk_1' => ['type' => 'foreign', 'columns' => ['N_COMP', 'T_COMP'], 'references' => ['comprobantes', '1' => ['N_COMP', 'T_COMP']], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'ID_CUOTA' => 1,
            'ESTADO_VTO' => 'L',
            'FECHA_VTO' => '2017-08-02 20:49:09',
            'IMPORTE_VT' => 1.5,
            'N_COMP' => 'Lorem ipsum',
            'T_COMP' => 'L',
            'N_COMP_CAN' => '54c622fe-a9c1-4b56-b6a0-2b0f6e363284',
            'T_COMP_CAN' => '4cebddba-5935-4de5-9727-3b77646776e5'
        ],
    ];
}
