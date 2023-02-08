<?php

namespace App\Controller;

use App\Service\DemoRespository;
use HAB\OAI\PMH\Request\Parameters;
use HAB\OAI\PMH\Request as OAIRequest;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    #[Route('/', name: 'app_app')]
    public function index(): Response
    {
        return $this->render('app/index.html.twig', [
            'controller_name' => 'AppController',
        ]);
    }

    #[Route('/oai', name: 'oai_server')]
    public function oai(): Response
    {
        $demoRepository = new DemoRespository();
        $oaiRequest = new OAIRequest\Controller($demoRepository);
        $params = new Parameters(['verb' => 'Identify']);
        $response = $oaiRequest->handle('localhost', $params);

        dd($response);
    }


}
