<?php

namespace Hackzilla\Bundle\SupplementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AboutController extends Controller
{
    public function indexAction()
    {
        return $this->render('HackzillaSupplementBundle:About:index.html.twig');
    }
}
