<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ZonasFixture
 *
 */
class ZonasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID_ZONA' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'COD_ZONA' => ['type' => 'string', 'length' => 2, 'null' => false, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'NOMBRE_ZON' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['COD_ZONA'], 'length' => []],
            'ID_ZONA' => ['type' => 'unique', 'columns' => ['ID_ZONA'], 'length' => []],
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
            'ID_ZONA' => 1,
            'COD_ZONA' => 'f44dbb4a-fdad-47db-868d-3ce9ec62a21a',
            'NOMBRE_ZON' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
