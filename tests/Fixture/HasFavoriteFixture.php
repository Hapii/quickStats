<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HasFavoriteFixture
 *
 */
class HasFavoriteFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'has_favorite';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'userName' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'tname' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'tname' => ['type' => 'index', 'columns' => ['tname'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['userName', 'tname'], 'length' => []],
            'has_favorite_ibfk_1' => ['type' => 'foreign', 'columns' => ['userName'], 'references' => ['subscriber', 'userName'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'has_favorite_ibfk_2' => ['type' => 'foreign', 'columns' => ['tname'], 'references' => ['team', 'tname'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
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
            'userName' => '9e9b8baa-d24f-4922-b8a5-53cbac13a555',
            'tname' => 'e228e604-d286-4d52-ab78-f14c1cd80f58'
        ],
    ];
}
