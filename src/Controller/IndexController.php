<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController
{
    /**
     * @Route("hello-world/{name}", methods={"GET"})
     */
    public function helloName($name)
    {
        return new Response("Hello " . ucfirst($name));
    }
    
    /**
     * @Route("hello-world")
     */
    public function helloWord(Request $request): Response
    {
        return new Response('Hello World!');
    }
}