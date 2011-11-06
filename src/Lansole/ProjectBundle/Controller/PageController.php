<?php

namespace Lansole\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('LansoleProjectBundle:Page:index.html.twig');
    }
}
