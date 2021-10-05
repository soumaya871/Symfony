<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    /**
     * @Route("/teacher", name="teacher")
     */
    public function index(): Response
    {
        return $this->render('teacher/showTeacher.html.twig', [
           'name'=> "soumaaya Hadidane"
        ]);
    }
    /**
     * @Route("/showTeacher/{var}", name="showTeacher")
     */
    public function show ($var){
return new Response ("Boonjour ".$var);
    }
}
