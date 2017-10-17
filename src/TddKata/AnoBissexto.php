<?php

namespace TddKata;


class AnoBissexto
{

    /**
     * @param int $ano
     * @return boolean
     */
    public function ehBissexto($ano)
    {
        return ($ano % 400 == 0 || (($ano % 4 == 0) && ($ano % 100 != 0)));
    }

}