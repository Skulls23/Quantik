<?php
    include ("../FonctionsUtiles.php");
    require_once ("../ArrayPieceQuantik.php");
    require_once ("../PieceQuantik.php");

    echo getDebutHTML();
    echo getFormSelectionPiece(ArrayPieceQuantik::initPiecesNoires());
    echo getFormSelectionPiece(ArrayPieceQuantik::initPiecesBlanches());
    echo getFinHTML();
?>