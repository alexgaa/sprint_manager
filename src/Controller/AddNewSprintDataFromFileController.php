<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddNewSprintDataFromFileController extends AbstractController
{
    /**
     * @Route("/add-new-sprint-data-from-file", name="add_new_sprint_data_from_file")
     */
    public function index(): Response
    {
        return $this->render('add_new_sprint_data_from_file/index.html.twig', [
            'controller_name' => 'AddNewSprintDataFromFileController',
        ]);
    }
}
