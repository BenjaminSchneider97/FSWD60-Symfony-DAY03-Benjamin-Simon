<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HotelController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('hotel/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/home", name="home")
     */
    public function homeAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('hotel/home.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    public function displayAction()
    {
        $stud = $this->getDoctrine()
        ->getRepository('AppBundle:rooms')
        ->findAll();
        return $this->render('hotel/home.html.twig', array('data' => $stud));
    }
}

?>

