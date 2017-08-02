<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PlanesFixture
 *
 */
class PlanesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID_PLAN' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'COND_VTA' => ['type' => 'string', 'length' => 3, 'null' => false, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'DESC_COND' => ['type' => 'string', 'length' => 60, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'CANT_CUOTA' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'DIA_MES' => ['type' => 'string', 'length' => 1, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['COND_VTA'], 'length' => []],
            'ID_PLAN' => ['type' => 'unique', 'columns' => ['ID_PLAN'], 'length' => []],
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
            'ID_PLAN' => 1,
            'COND_VTA' => 'a3d0030b-e7c9-437e-a079-82a567fc681d',
            'DESC_COND' => 'Lorem ipsum dolor sit amet',
            'CANT_CUOTA' => 1,
            'DIA_MES' => 'Lorem ipsum dolor sit ame'
        ],
    ];
}
