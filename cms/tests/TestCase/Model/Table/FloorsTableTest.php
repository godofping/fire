<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FloorsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FloorsTable Test Case
 */
class FloorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FloorsTable
     */
    protected $Floors;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Floors',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Floors') ? [] : ['className' => FloorsTable::class];
        $this->Floors = $this->getTableLocator()->get('Floors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Floors);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
