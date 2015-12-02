<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PlaysFixture
 *
 */
class PlaysFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'hometeam' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'awayteam' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'dateOfGame' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'homescore' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'awayscore' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'awayteam' => ['type' => 'index', 'columns' => ['awayteam'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['hometeam', 'awayteam', 'dateOfGame'], 'length' => []],
            'plays_ibfk_1' => ['type' => 'foreign', 'columns' => ['hometeam'], 'references' => ['team', 'tname'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'plays_ibfk_2' => ['type' => 'foreign', 'columns' => ['awayteam'], 'references' => ['team', 'tname'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'hometeam' => 'd3e4897e-cdaf-43db-b966-18a78f7e3d1d',
            'awayteam' => 'f6db308d-78ad-4920-841e-1aecc41b1d34',
            'dateOfGame' => '2015-11-29',
            'homescore' => 1,
            'awayscore' => 1
        ],
    ];
}
