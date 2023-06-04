<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function home(): Response
    {
        //dd("Test");
        return $this->render('pages/home.html.twig');
    }

    #[Route('/password-generator', name: 'app_password_generator')]
    public function password_generator(): Response
    {
        return $this->render('pages/password-generator.html.twig');
    }
}
