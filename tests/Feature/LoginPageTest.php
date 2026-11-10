<?php

namespace Tests\Feature;

use Tests\TestCase;

class LoginPageTest extends TestCase
{
    public function test_login_page_can_be_opened(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('Masukkan username');
    }
}
