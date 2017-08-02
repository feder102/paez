<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VendedoresFixture
 *
 */
class VendedoresFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID_VENDEDOR' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'COD_VENDED' => ['type' => 'string', 'length' => 2, 'null' => false, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'NOMBRE_VEN' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['COD_VENDED'], 'length' => []],
            'ID_VENDEDOR' => ['type' => 'unique', 'columns' => ['ID_VENDEDOR'], 'length' => []],
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
            'ID_VENDEDOR' => 1,
            'COD_VENDED' => '9ef435c1-0256-447e-b9b1-ce5632f06e88',
            'NOMBRE_VEN' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
