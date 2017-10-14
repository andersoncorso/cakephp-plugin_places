<?php
namespace Places\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Places\Model\Table\EstadosTable;

/**
 * Places\Model\Table\EstadosTable Test Case
 */
class EstadosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Places\Model\Table\EstadosTable
     */
    public $Estados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.places.estados',
        'plugin.places.regiaos',
        'plugin.places.municipios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Estados') ? [] : ['className' => EstadosTable::class];
        $this->Estados = TableRegistry::get('Estados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Estados);

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
