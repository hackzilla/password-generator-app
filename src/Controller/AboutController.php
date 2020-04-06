<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AboutController extends AbstractController
{
    public function index()
    {
        return $this->render('About\\index.html.twig');
    }
}
