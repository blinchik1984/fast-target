<?php


namespace Target\Components;


use AdServer\Engine\Components\ClientLocal;
use AdServer\Engine\Components\Engine;
use Symfony\Component\HttpFoundation\Request;

class Service
{
    protected $contentApiClient;

    public function __construct(
        ClientLocal $contentApiClient
    )
    {
        $this->contentApiClient = $contentApiClient;
    }

    public function getTarget()
    {
        return "Call from target" . $this->contentApiClient->request(new \GuzzleHttp\Psr7\Request('GET', '/'))->getBody()->getContents();
    }
}