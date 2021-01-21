<?php

    function getDebutHTML():string
    {
        return "<!DOCTYPE html>
                <html lang=\"fr\">
                    <head>
                        <title>Quantik</title>
                    </head>
                    <body>";
    }

    function getFinHTML():string
    {
        return "    </body>
                </html>";
    }

    function getDivPiecesDisponibles( ArrayPieceQuantik $pieces ):string
    {
        $sRet = "<div>";

        for ( $cpt = 0; $cpt < $pieces->getTaille(); $cpt++ )
            $sRet .= "<button type=\"submit\" name=\"active\" disabled>" . $pieces->getPieceQuantik($cpt) . "</button>";

        return $sRet . "</div>";
    }

    function getFormSelectionPiece( ArrayPieceQuantik $pieces ):string
    {
        $sRet = "<form action=\"\" method=\"post\">
                    ";

        for ( $cpt = 0; $cpt < $pieces->getTaille(); $cpt++ )
            $sRet .= "<button type=\"submit\" name=\"select\" value='$cpt' >" . $pieces->getPieceQuantik($cpt) . "</button>";

        $sRet .= "
                </form>";

        return $sRet;
    }
?>