<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class LogoutController extends AbstractController
{
   
    #[Route('/logout', name: 'app_logout')]
    public function index(SessionInterface $session): Response
    {
        // Ajoutez toute logique de déconnexion personnalisée si nécessaire
        $session->invalidate();

        return $this->redirectToRoute('app_home'); // Remplacez par la route vers laquelle vous souhaitez rediriger après la déconnexion
    }
    
}
