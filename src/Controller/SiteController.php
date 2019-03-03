<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;

class SiteController extends AbstractController
{
    public function index()
    {
        return $this->render('index.html.twig');
    }

    public function rss()
    {
        return new Response(
            '<html><body>RSS</body></html>'
        );
    }

    public function register()
    {
        return new Response(
            '<html><body>Register</body></html>'
        );
    }
}