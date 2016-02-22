<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;

use AppBundle\Entity\Concert;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function homeAction()
    {
        return $this->render('AppBundle:default:home.html.twig');
    }

    /**
     * @Route("/post/{slug}", name="post")
     */
    public function postAction(Article $article)
    {
        return $this->render('AppBundle:default:post.html.twig', array('article' => $article));
    }

    /**
     * @Route("/posts", name="posts")
     */
    public function postsAction()
    {
        $articles = $this->getDoctrine()->getRepository('AppBundle:Article')->findAll();

        return $this->render('AppBundle:default:posts.html.twig', array('articles' => $articles));
    }

     /**
     * @Route("/concerts", name="concerts")
     */
    public function postsConcert()
    {
        $articles = $this->getDoctrine()->getRepository('AppBundle:Concert')->findAll();

        return $this->render('AppBundle:default:concert.html.twig', array('concerts' => $articles));
    }
}
