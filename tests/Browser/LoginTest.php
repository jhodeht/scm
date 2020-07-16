<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
    //    $user = factory(User::class)->create([
    //         'email' => 'hola@hola.com',
    //     ]);

        $user = User::find(1);
        $this->browse(function (Browser $browser) use ($user) {
            $browser->visit('/login')
                    ->type('email', $user->email)
                    ->type('password', '12345678')
                    ->press('Acceder')
                    ->assertPathIs('/home');
        });
    }
}
