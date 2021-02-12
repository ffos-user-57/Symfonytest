<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormController extends AbstractController
{
    /**
     * @Route("/", name="form")
     */
    public function index(): Response
    {
        #return new Response("<html><body>hello</body></html>", 200);
		return $this->render("form/index.html.twig",[]);
    }
}
