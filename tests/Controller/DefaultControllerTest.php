<?php

declare(strict_types=1);

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testSearch()
    {
        $client = self::createClient([], [
            'PHP_AUTH_USER' => 'admin',
            'PHP_AUTH_PW' => 'password',
        ]);

        $client->request('GET', '/test');

        self::assertResponseIsSuccessful();

        $client->request('GET', '/test');

        self::assertResponseIsSuccessful();

        gc_collect_cycles();
        dump(memory_get_usage()/1024/1024);
    }
}
