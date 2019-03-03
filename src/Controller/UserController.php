<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class UserController
{
    public function register()
    {
        return new Response(
            '<html><body>Register</body></html>'
        );
    }
}