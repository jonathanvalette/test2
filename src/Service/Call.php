<?php

namespace App\Entity;

use App\Entity\Test;
use App\Repository\TestRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

Class call {
    
    
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }



private function getApi(string $var)
{
    $response = $this->client->request(
        'GET',
        'https://coronavirusapi-france.now.sh/' . $var
    );

    return $response->toArray();
}


}