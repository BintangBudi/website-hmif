<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AdminCreateAlbumTest extends DuskTestCase
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
                    ->clickLink('+ Tambah Album')
                    ->assertPathIs('/dapur/galeri/tambah')
                    ->type('nama_album', 'test-album')
                    ->attach('thumbnail', __DIR__.'/files/test-thumbnail.png')
                    ->press('Simpan')
                    ->assertPathIs('/dapur/galeri')
                    ->assertSee('test-album');
        });
    }
}
