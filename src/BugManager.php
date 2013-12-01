<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

class BugManager
{
    protected $em;

    public function __construct()
    {
        $this->em = require __DIR__.'/../bootstrap.php';
        var_dump($this->em);
    }
}

$bug = new BugManager();