<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/category/{id}", name="category_show")
     */
    public function indexAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $category = $em->getRepository('AppBundle:Category')->findOneBy(['id'=>$id]);
        $lessons = $em->getRepository('AppBundle:Lesson')->findBy(['category'=>$category]);
        return $this->render('category/show.html.twig', [
            'lessons' => $lessons,
        ]);
    }
}
