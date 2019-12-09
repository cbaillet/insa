<?php
use PHPUnit\Framework\TestCase;

require_once 'src/Poneys.php';

/**
 * Classe de test de gestion de poneys
 */
class PoneysTest extends TestCase
{

    public function setUp()
    {
        $this->Poneys = new Poneys();
        $this->Poneys->setCount(QPONEY);
    }

    public function tearDown()
    {
        $this->Poneys = null;
    }

    /**
     * @dataProvider provider
     *
     * @return void
     */
    public function testRemovePoneyFromField($i)
    {
        $Poneys = new Poneys();
        // Delete
        $Poneys->removePoneyFromField($i);

        // Assert
        $this->assertEquals(8-$i, $Poneys->getCount());
    }

    public function provider()
    {
        return array(
          array(1),
          array(2),
          array(3)
        );
    }

    public function testAddPoneyFromField()
    {
        // Setup
        $Poneys = new Poneys();

        //Add
        $Poneys->addPoneyFromField(2);

        // Assert
        $this->assertEquals(10, $Poneys->getCount());
    }

    public function testRemoveMorePoneyFromField()
    {
        $Poneys = new Poneys();
        // Delete
        $this->expectException(Exception::class);

        $Poneys->removePoneyFromField(9);
    }

    public function testMockGetNames()
    {
        $name = ["Foudre"];

        $this->namePoney = $this->getMockBuilder(Poneys::class)->getMock();

        $this->namePoney->expects($this->exactly(1))
            ->method('getNames')
            ->willReturn($name);
        
        $this->assertEquals($name, $this->namePoney->getNames());
    }

    public function testFreePoney()
    {
        $Poneys = new Poneys;

        $this->assertTrue($Poneys->isFree());

        $Poneys->addPoneyFromField(14);

        $this->assertFalse($Poneys->isFree());

    }

}
?>
