<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AdminEditAlbumTest extends DuskTestCase
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
                    ->click('@edit-album-test-album')
                    ->assertPathIs('/dapur/galeri/edit/13')
                    ->type('nama_album', 'test-album-edit')
                    ->attach('thumbnail', __DIR__.'/files/test-photo1.jpg')
                    ->press("Simpan Perubahan")
                    ->assertPathIs('/dapur/galeri')
                    ->assertSee('test-album-edit');
        });
    }
}
