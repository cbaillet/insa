<?php
use PHPUnit\Framework\TestCase;

require_once 'src/Poneys.php';

/**
 * Classe de test 
 */
class monTest extends TestCase
{
    public function testR()
    {
        $P = 1;
    
        $this->assertEquals(1,$P);
    }
}