<?php

namespace App\Controller;

use App\Entity\Notification;
use App\Form\NotificationFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NotifyController extends AbstractController
{
    /**
     * @Route("/notify", name="notify")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request): Response
    {
        //J'initialise mon objet Notification
        $notification = new Notification();
        //Je créé mon formulaire sur base de mon Notification Form Type et en lui indiquant que le 'data" sera '$notification'
        $form = $this->createForm(NotificationFormType::class,$notification);
        //Je manipule ma requete pour la recupérer
        $form->handleRequest($request);
        //Je teste si mon formulaire à bien été envoyé et qu'il est valide
        if($form->isSubmitted() && $form->isValid())
        {
            //Si le test est true j'appelle une autre vue en lui passant l'objet notification
            return $this->render('notify/result.html.twig',[
                'result'=>$notification
            ]);
        }
        //Par défaut le formulaire vide est appelé.
        return $this->render('notify/index.html.twig', [
                'form'=>$form->createView()
            ]);
    }
}
