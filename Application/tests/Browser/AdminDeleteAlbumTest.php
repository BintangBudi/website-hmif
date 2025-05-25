<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AdminDeleteAlbumTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->type('email', 'hmif@contoh.com')
                ->type('password', 'passwordhmif')
                ->press('Login')
                ->assertPathIs('/dapur')
                ->clickLink('Galeri')
                ->assertPathIs('/dapur/galeri')
                ->script("window.confirm = () => true;");
                
                $browser->click('@delete-album-test-album-edit')
                ->pause(1000)
                ->assertDontSee('test-album-edit');
        });
        
                    
    }
}
