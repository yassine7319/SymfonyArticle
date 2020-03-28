<?php
 namespace App\Controller;

 use Symfony\Component\HttpFoundation\Response;
 use Symfony\Component\Routing\Annotation\Route;
 use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
 use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

 class ArticleController extends AbstractController{
     /** 
      * @Route("/")
      * @Method({"GET"})
      */
    public function index(){
        $articles = ['articles1' , 'article2'];
        return $this->render('articles/index.html.twig' , array('articles' => $articles));
    }

 }
 
