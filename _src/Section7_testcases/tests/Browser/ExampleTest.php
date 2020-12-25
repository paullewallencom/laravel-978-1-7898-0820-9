<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    // public function testBrowserLogin()
    // {
    //     $user = factory(\App\User::class)->create([
    //         'email'=>'abcd1@laravel.com'
    //     ]);
    //     $this->browse(function (Browser $browser) use($user){
    //         $browser->visit('/login')
    //                 ->type('email',$user->email)
    //                 ->type('password','secret')
    //                 ->press('Login')
    //                 ->assertPathIs('/home');
    //     });
    // }
    public function testBrowserRegister()
    {
        $this->browse(function (Browser $browser){
            $browser->visit('/register')
                    ->type('name','Laravel1')
                    ->type('email','laravelemail1@laravel.com')
                    ->type('password','secret')
                    ->type('password_confirmation','abcd')
                    ->press('Register')
                    ->assertPathIs('/home');
        });
    }
}
