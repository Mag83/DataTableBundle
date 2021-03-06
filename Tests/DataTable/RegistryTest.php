<?php


namespace CrossKnowledge\DataTableDundle\Tests\DataTable;


use CrossKnowledge\DataTableBundle\DataTable\DataTableRegistry;
use CrossKnowledge\DataTableBundle\DataTable\Table\AbstractTable;

class RegistryTest extends \PHPUnit_Framework_TestCase
{
    public function testRetrieveTableById()
    {
        $table = $this->getMockBuilder(AbstractTable::class)
                      ->disableOriginalConstructor()
                      ->getMock();

        $registry = new DataTableRegistry(['test' => $table]);
        $this->assertEquals($table, $registry->retrieveByTableId('test'));

        $this->setExpectedException('\BadMethodCallException');
        $registry->retrieveByTableId('undef');
    }
}