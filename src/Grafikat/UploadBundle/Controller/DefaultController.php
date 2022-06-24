<?php

namespace Grafikat\UploadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GrafikatUploadBundle:Default:index.html.twig');
    }
}
