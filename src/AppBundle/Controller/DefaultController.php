<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        $categories = $em->getRepository('AppBundle:Category')->findAll();
        return $this->render('default/index.html.twig', [
            'categories' => $categories,
        ]);
    }
}
