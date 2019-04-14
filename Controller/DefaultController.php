<?php

namespace KotSoft\UserInfoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KotSoftUserInfoBundle:Default:index.html.twig');
    }
}
