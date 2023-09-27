<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    public function index(): Response{
        return new Response('Bonr');
    }
    public function showTeacher($name){
        return new Response('Bon'.$name);
    }
}
