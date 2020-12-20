<?php

require_once '../model.php';

function fetch()
{
    return search($_GET['q']);
}
