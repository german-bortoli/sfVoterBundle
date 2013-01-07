<?php

namespace HotDesign\sfVoterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('sfVoterBundle:Default:index.html.twig', array('name' => $name));
    }
}
