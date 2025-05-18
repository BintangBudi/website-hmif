<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class GaleriToAlbumTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->clickLink('Galeri')
                ->assertPathIs('/galeri')
                ->assertSee('Album HMIF')
                ->pause(1000);

                $browser->script('window.scrollTo(0, document.body.scrollHeight/1.5);');
                $browser->pause(1000);

                $browser->assertDontSee('Belum ada album tersedia.')
                ->assertSee('Berikutnya')
                ->clickLink('Berikutnya')
                ->pause(1000);



                $browser->script('window.scrollTo(0, document.body.scrollHeight/3);');
                $browser->pause(1000);

                $browser->assertDontSee('Belum ada album tersedia.')
                ->assertSee('Silaturahmi Keluarga Besar Informatika')
                ->clickLink('Silaturahmi Keluarga Besar Informatika')
                ->pause(1000);

                $browser->assertSee('Dokumentasi Kegiatan')
                ->assertSee('Silaturahmi Keluarga Besar Informatika')
                ->pause(1000);


                $browser->script('window.scrollTo(0, document.body.scrollHeight/3);');
                $browser->pause(1000);

                $browser->assertDontSee('Tidak ada foto tersedia di album ini.')
                ->assertVisible('.list-photo-test');
                

        });
    }
}
