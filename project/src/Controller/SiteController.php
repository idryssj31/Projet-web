<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Utilisateur;
use App\Entity\Recette;
use App\Entity\Palier;
use App\Entity\Favoris;
use App\Entity\Compteur;
use App\Entity\Cartebancaire;

class SiteController extends AbstractController
{
    /**
     * @Route("/site", name="site")
     */
    public function index(): Response
    {
        

        
        return $this->render('site/index.html.twig', [
            'controller_name' => 'SiteController',
            
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home() {
        
        return $this->render('site/nav.html.twig',[
            
        ]);
            
    }

    /**
     * @Route("/site/membre", name="membre")
     */
    public function membre() {
        $repo = $this->getDoctrine()->getRepository(Recette::class);
        $recettes = $repo->find(1);
        $repo = $this->getDoctrine()->getRepository(Cartebancaire::class);
        $cartebancaires = $repo->findAll();
        $repo = $this->getDoctrine()->getRepository(Favoris::class);
        $favoriss = $repo->findAll();
        $repo = $this->getDoctrine()->getRepository(Palier::class);
        $palier = $repo->find(1);
        $repo = $this->getDoctrine()->getRepository(Compteur::class);
        $compteur = $repo->find(1);
        $repo = $this->getDoctrine()->getRepository(Utilisateur::class);
        $utilisateurs = $repo->findAll();
        
        return $this->render('site/membre.html.twig',[
            'controller_name' => 'SiteController',
            'utilisateurs' => $utilisateurs,
            'recettes' => $recettes,
            'compteur' => $compteur,
            'palier' => $palier,
            'favoriss' => $favoriss,
            'cartebancaires' => $cartebancaires

        ]);
            
    }




    /**
     * @Route("/site/message", name="message")
     */
    public function message() {
        return $this->render('site/message.html.twig');
    }

    /**
     * @Route("/site/parametre", name="parametre")
     */
    public function parametre() {
        return $this->render('site/parametre.html.twig');
    }

    /**
     * @Route("/site/shopping", name="shopping")
     */
    public function shopping() {
        return $this->render('site/shopping.html.twig');
    }

    /**
     * @Route("cinema/index.html", name="filtre")
     */
    public function filtre() {
        return $this->render('cinema/index.html');
    }

    /**
     * @Route("/site/question", name="question")
     */
    public function question() {
        return $this->render('site/question.html.twig');
    }

    /**
     * @Route("/site/3.html.twig", name="3")
     */
    public function trois() {
        return $this->render('site/3.html.twig');
    }

    /**
     * @Route("/site/4.html.twig", name="4")
     */
    public function quatre() {
        return $this->render('site/4.html.twig');
    }

    /**
     * @Route("/site/7.html.twig", name="7")
     */
    public function sept() {
        return $this->render('site/7.html.twig');
    }


}
