<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmployeesFixture
 */
class EmployeesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'employeeid' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'positionid' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fullname' => ['type' => 'string', 'length' => 60, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'contactnumber' => ['type' => 'string', 'length' => 60, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'FK_employees' => ['type' => 'index', 'columns' => ['positionid'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['employeeid'], 'length' => []],
            'FK_employees' => ['type' => 'foreign', 'columns' => ['positionid'], 'references' => ['positions', 'positionid'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'employeeid' => 1,
                'positionid' => 1,
                'fullname' => 'Lorem ipsum dolor sit amet',
                'contactnumber' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
