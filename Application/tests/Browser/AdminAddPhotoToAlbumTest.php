<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AdminAddPhotoToAlbumTest extends DuskTestCase
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
                    ->click('@edit-album-test-album-edit')
                    ->assertPathIs('/dapur/galeri/edit/13')
                    ->type('nama_album', 'test-album-edit')
                    ->attach('foto[]', __DIR__.'/files/test-photo1.jpg')
                    ->attach('foto[]', __DIR__.'/files/test-thumbnail.png')
                    ->press("Upload Foto")
                    ->pause(1000);


                    $browser->script('window.scrollTo(0, document.body.scrollHeight);');
                    $browser->pause(1000);

                    $browser->assertSee('test-photo1.jpg')
                    ->assertDontSee('Tidak ada foto di album ini.');
        });
    }
}
