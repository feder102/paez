<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsuariosFixture
 *
 */
class UsuariosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID_USUARIO' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'COD_VENDED' => ['type' => 'string', 'length' => 2, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'USUARIO' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'CLAVE' => ['type' => 'string', 'length' => 150, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'PERFIL' => ['type' => 'string', 'length' => 150, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'COD_VENDED' => ['type' => 'index', 'columns' => ['COD_VENDED'], 'length' => []],
        ],
        '_constraints' => [
            'ID_USUARIO' => ['type' => 'unique', 'columns' => ['ID_USUARIO'], 'length' => []],
            'usuarios_ibfk_1' => ['type' => 'foreign', 'columns' => ['COD_VENDED'], 'references' => ['vendedores', 'COD_VENDED'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'ID_USUARIO' => 1,
            'COD_VENDED' => '',
            'USUARIO' => 'Lorem ipsum dolor sit amet',
            'CLAVE' => 'Lorem ipsum dolor sit amet',
            'PERFIL' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
