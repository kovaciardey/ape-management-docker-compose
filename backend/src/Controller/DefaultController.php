<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route('/welcome', name: 'app_welcome')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to the Andrei\'s Portal to Everything',
            'time' => date('d-m-Y H:i:s'),
        ]);
    }
}
