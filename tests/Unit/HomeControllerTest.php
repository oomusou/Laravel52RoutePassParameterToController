<?php

class HomeControllerTest extends TestCase
{
    /** @test */
    public function welcomeURI()
    {
        $this->visit('/welcome')
            ->see('Laravel 5');
    }
}
