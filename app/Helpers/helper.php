<?php

function get_accent_pos($i)
{
    $pos = array();
    $pos['x'] = -1 * rand(20, 25);
    $pos['y'] = $i * 25 +  rand(2, 5);
        return $pos;
}