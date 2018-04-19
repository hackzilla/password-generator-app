<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AboutController extends Controller
{
    public function index()
    {
        return $this->render('About\\index.html.twig');
    }
}
