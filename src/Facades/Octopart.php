<?php
/**
 * @file Octopart.php
 */

namespace NexPCB\LaravelOctopart\Facades;

use Illuminate\Support\Facades\Facade;

class Octopart extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'NexPCB\LaravelOctopart\Octopart';
    }
}