<?php
namespace Places\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Places\Model\Table\RegioesTable;

/**
 * Places\Model\Table\RegioesTable Test Case
 */
class RegioesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Places\Model\Table\RegioesTable
     */
    public $Regioes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.places.regioes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Regioes') ? [] : ['className' => RegioesTable::class];
        $this->Regioes = TableRegistry::get('Regioes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Regioes);

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
}
