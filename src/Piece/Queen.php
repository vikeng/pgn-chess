<?php
namespace PGNChess\Piece;

use PGNChess\PGN;
use PGNChess\Piece\AbstractPiece;
use PGNChess\Piece\Rook;
use PGNChess\Piece\Bishop;

class Queen extends AbstractPiece
{
    private $rook;

    private $bishop;

    public function __construct($color, $position)
    {
        parent::__construct($color, $position, PGN::PIECE_QUEEN);
        $this->rook = new Rook($color, $position, PGN::PIECE_ROOK);
        $this->bishop = new Bishop($color, $position, PGN::PIECE_BISHOP);
        $this->scope();
    }

    protected function scope()
    {
        $this->position->scope = (object) array_merge(
            (array) $this->rook->getPosition()->scope,
            (array) $this->bishop->getPosition()->scope
        );
    }
}
