<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CreditcardsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CreditcardsTable Test Case
 */
class CreditcardsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CreditcardsTable
     */
    public $Creditcards;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Creditcards',
        'app.Users',
        'app.Payments',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Creditcards') ? [] : ['className' => CreditcardsTable::class];
        $this->Creditcards = TableRegistry::getTableLocator()->get('Creditcards', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Creditcards);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
