<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PlaysOnFixture
 *
 */
class PlaysOnFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'plays_on';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'pid' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tname' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'NumberOfYears' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'startDate' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'endDate' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'tname' => ['type' => 'index', 'columns' => ['tname'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['pid'], 'length' => []],
            'plays_on_ibfk_1' => ['type' => 'foreign', 'columns' => ['pid'], 'references' => ['player', 'pid'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'plays_on_ibfk_2' => ['type' => 'foreign', 'columns' => ['tname'], 'references' => ['team', 'tname'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'pid' => 1,
            'tname' => 'Lorem ipsum dolor sit amet',
            'NumberOfYears' => 1,
            'startDate' => '2015-11-29',
            'endDate' => '2015-11-29'
        ],
    ];
}
