<?php

it('renders title', function () {
    $this->view('index')
        ->assertSee('Laravel / Vite');
});
