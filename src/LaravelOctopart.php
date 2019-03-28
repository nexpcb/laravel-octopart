<?php

namespace NexPCB\LaravelOctopart;

use NexPCB\PHPOctopart\Client;

class LaravelOctopart
{

    /**
     * @var Client
     */
    protected $client;

    /**
     * Factory constructor.
     * @param array $config
     * @param null $client
     * @param array $clientOptions
     * @throws \Exception
     */
    public function __construct($config = [], $client = null, $clientOptions = [])
    {
        $this->client = $client ?: new Client($config, $client, $clientOptions);
    }

    /**
     * @param array $config
     * @param null $client
     * @param array $clientOptions
     * @return LaravelOctopart
     * @throws \Exception
     */
    public static function create($config = [], $client = null, $clientOptions = [])
    {
        return new static($config, $client, $clientOptions);
    }

    /**
     * @param $name
     * @param array $arguments
     * @return mixed
     */
    public function __call($name, $arguments = [])
    {
        $resource = 'NexPCB\\PHPOctopart\\Resources\\' . ucfirst($name);

        return new $resource($this->client);
    }
}