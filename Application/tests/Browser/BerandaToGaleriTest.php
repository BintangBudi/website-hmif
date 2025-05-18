<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class BerandaToGaleriTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $this->browse(function (Browser $browser) {
                $browser->visit('/')
                ->clickLink('Galeri')
                ->assertPathIs('/galeri')
                ->assertSee('Album HMIF')
                ->pause(1000);

                $browser->script('window.scrollTo(0, document.body.scrollHeight/3);');

                $browser->pause(1000);

                
                $browser->assertDontSee('Belum ada album tersedia.')
                ->assertSeeIn('.album-item-test', 'Test album 10');
        
            });
   
        });
    }
}
