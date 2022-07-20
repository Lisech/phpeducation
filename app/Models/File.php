<?php

namespace App\Models;

class File
{
    protected string $table = "files";

    /** @var int */
    public $id;

    /** @var string */
    public $name;

    /** @var string */
    public $type;

    /** @var string */
    public $essence;

    /** @var int */
    public $essence_id;

    /** @var string */
    public $path;
}