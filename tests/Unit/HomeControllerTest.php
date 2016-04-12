<?php

class HomeControllerTest extends TestCase
{
    /** @test */
    public function welcomeURI()
    {
        $this->visit('/welcome')
            ->see('Laravel 5');
    }

    /** @test */
    public function helloWorldURI()
    {
        $this->visit('/helloworld')
            ->see('Hello World');
    }
}
