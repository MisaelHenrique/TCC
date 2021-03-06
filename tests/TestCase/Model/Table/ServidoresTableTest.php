<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ServidoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ServidoresTable Test Case
 */
class ServidoresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ServidoresTable
     */
    public $Servidores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Servidores',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Servidores') ? [] : ['className' => ServidoresTable::class];
        $this->Servidores = TableRegistry::getTableLocator()->get('Servidores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Servidores);

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
