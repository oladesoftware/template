<?php
namespace App\Core\Http;

class Request
{
    private array $request;

    public function __construct(array $request){
        $this->request = $request;
    }

    public function getUrlPath(): string
    {
        return parse_url($this->request["REQUEST_URI"], PHP_URL_PATH);
    }

    public function getMethod(): string
    {
        return strtoupper($this->request["REQUEST_METHOD"]);
    }
}