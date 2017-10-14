<?php
namespace Places\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Places\Model\Table\MunicipiosTable;

/**
 * Places\Model\Table\MunicipiosTable Test Case
 */
class MunicipiosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Places\Model\Table\MunicipiosTable
     */
    public $Municipios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.places.municipios',
        'plugin.places.estados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Municipios') ? [] : ['className' => MunicipiosTable::class];
        $this->Municipios = TableRegistry::get('Municipios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Municipios);

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
