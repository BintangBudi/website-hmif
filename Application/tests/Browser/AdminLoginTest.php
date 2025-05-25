<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use App\Models\User;
use Tests\DuskTestCase;

class AdminLoginTest extends DuskTestCase
{
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'test@gmail.com')
                    ->type('password', 'test')
                    ->press('Login')
                    ->assertSee("Email atau password salah.")
                    ->type('email', 'hmif@contoh.com')
                    ->type('password', 'passwordhmif')
                    ->press('Login')
                    ->assertPathIs('/dapur');
        });
    }
}
