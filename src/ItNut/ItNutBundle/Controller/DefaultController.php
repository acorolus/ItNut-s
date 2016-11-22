<?php

namespace ItNut\ItNutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ItNutItNutBundle:Default:index.html.twig');
    }
}
