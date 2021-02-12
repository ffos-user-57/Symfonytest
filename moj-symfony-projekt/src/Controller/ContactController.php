<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#use Symfony\Component\Form\Extension\Core\Type\TextType;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
		$form = $this->createForm(ContactType::class, "");
		
        return $this->render('', ['our_form'=> $form->createView()]); 
    }
}
