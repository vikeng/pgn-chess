<?php
namespace PGNChess\Tests\Piece;

use PGNChess\PGN\Symbol;
use PGNChess\Piece\King;

class KingTest extends \PHPUnit_Framework_TestCase
{
    public function testScope_a2()
    {
        $king = new King(Symbol::WHITE, 'a2');
        $scope = (object) [
            'up' => 'a3',
            'bottom' => 'a1',
            'right' => 'b2',
            'upRight' => 'b3',
            'bottomRight' => 'b1'
        ];
        $this->assertEquals($scope, $king->getScope());
    }

    public function testScope_d5()
    {
        $king = new King(Symbol::WHITE, 'd5');
        $scope = (object) [
            'up' => 'd6',
            'bottom' => 'd4',
            'left' => 'c5',
            'right' => 'e5',
            'upLeft' => 'c6',
            'upRight' => 'e6',
            'bottomLeft' => 'c4',
            'bottomRight' => 'e4'
        ];
        $this->assertEquals($scope, $king->getScope());
    }
}
