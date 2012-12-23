<?php

namespace David\BlogBundle\Controller;

use  Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// Attention à bien rajouter ce use en début de contrôleur
use David\BlogBundle\Entity\Article;
use David\BlogBundle\Entity\Image;
use David\BlogBundle\Entity\Commentaire;
use David\BlogBundle\Entity\Categorie;
use David\BlogBundle\Form\ArticleType;



class BlogController extends Controller{
	
	public function indexAction($page = 1){

        //On récupère tous le nombre d'articles
        $repository = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('DavidBlogBundle:Article');
         
        $nb_articles = $repository->getTotal();

        $articles_per_page = 10;

        $nb_pages = ceil($nb_articles / $articles_per_page);

        $offset = ($page-1) * $articles_per_page;

        if( $page < 1 || $page>$nb_pages)
        {
            // On déclenche une exception NotFoundHttpException, cela va afficher
            // la page d'erreur 404 (on pourra personnaliser cette page plus tard, d'ailleurs).
            throw $this->createNotFoundException('Page inexistante (page = '.$page.')');
        }


        $articles = $repository->findBy(
                array(),
                array('date' => 'desc'),
                $articles_per_page,
                $offset
            );

        // Mais pour l'instant, on ne fait qu'appeler le template.
        return $this->render('DavidBlogBundle:Blog:index.html.twig',
            array('articles' => $articles,
                  'page' => $page,
                  'nb_pages' => $nb_pages));		
	
	}
	
	public function voirAction(Article $article){
		
        // Tout ca ne sert à rien grace au paramconverter
        /*
        $doctrine = $this->getDoctrine();
        $em = $doctrine-> getEntityManager();
        $repository = $em->getRepository('DavidBlogBundle:Article');
        $article = $repository->find($id);
        // Ou null si aucun article n'a été trouvé avec l'id $id
        if($article === null)
        {
            throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
        }
        */ 
    	return $this->render('DavidBlogBundle:Blog:voir.html.twig',
            array('article' => $article));
    }
	
	public function ajouterAction(){

        //On crée un objet Article.
        $article = new Article();

        // Ici, on pré-rempli avec la date d'aujourd'hui, par exemple.
        // Cette date sera donc pré-affichée dans le formulaire, cela facilite le travail de l'utilisateur.
        $article->setDate(new \Datetime());

    	$article->setTitre("Titre par défaut");

    	$form = $this->createForm(new ArticleType,$article);
    	
    	/*
        //On crée le FormBuilder grace à la méthode du contrôleur.
        $formBuilder = $this->createFormBuilder($article);

        //On ajoute les champs de l'entité que l'on veut à notre formulaire.
        $formBuilder
            ->add('date','date')
            ->add('titre','text')
            ->add('contenu','textarea')
            ->add('auteur','text')
            ->add('publication','checkbox',array('required'=>false));

        //A partir du FormBuilder on génère le formulaire
        $form = $formBuilder->getForm();
		
		*/
		
        //On récupère la requete
        $request = $this->get('request');

        // La gestion d'un formulaire est particulière, mais l'idée est la suivante :

        if( $request->getMethod() == 'POST' )
        {
            // On fait le lien requete - Formulaire
            $form->bind($request);

            // On vérifie que les valeurs rentrées sont correctes.
            if($form->isValid()){
                //On enregistre lobjet dans la BD
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($article);
                $em->flush();

                $this->get('session')->setFlash('info', 'Article bien enregistré');

                //Redirection vers page visu du nouvel article
                return $this->redirect( $this->generateUrl('davidblog_voir', array('id' => $article->getId())) );
            }


        }

        // Si on n'est pas en POST, alors on affiche le formulaire.
        return $this->render('DavidBlogBundle:Blog:ajouter.html.twig',
        		array('form' => $form->createView()));
        
	}
	
	public function modifierAction($id)
    {
       $article = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('DavidBlogBundle:Article')
                        ->find($id);

        // Si l'article n'existe pas, on affiche une erreur 404
        if( $article == null )
        {
            throw $this->createNotFoundException('Article[id='.$id.'] inexistant');
        }

        // Ici, on s'occupera de la création et de la gestion du formulaire.

        return $this->render('DavidBlogBundle:Blog:modifier.html.twig', array(
            'article' => $article
        ));
    }

    public function supprimerAction($id)
    {
         $article = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('DavidBlogBundle:Article')
                        ->find($id);

        // Si l'article n'existe pas, on affiche une erreur 404
        if( $article == null )
        {
            throw $this->createNotFoundException('Article[id='.$id.'] inexistant');
        }

        if( $this->get('request')->getMethod() == 'POST' )
        {
            // Si la requête est en POST, on supprimera l'article.
            $this->get('session')->setFlash('info', 'Article bien supprimé');

            // Puis on redirige vers l'accueil.
            return $this->redirect( $this->generateUrl('davidblog_accueil') );
        }

        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer.
        return $this->render('DavidBlogBundle:Blog:supprimer.html.twig', array(
            'article' => $article
        ));
    }
  
    public function menuAction($nombre)
    {

    //On récupère tous les articles
        $articles = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('DavidBlogBundle:Article')
                         ->findAll();

        return $this->render('DavidBlogBundle:Blog:menu.html.twig', array('liste_articles' => $articles));
    }

    // Dans un contrôleur, celui que vous voulez

    public function modifierImageAction($id_article)
    {
        $em = $this->getDoctrine()->getManager();

        // On récupère l'article.
        $article = $em->getRepository('DavidBlogBundle:Article')->find($id_article);

        // On modifie l'URL de l'image par exemple.
        $article->getImage()->setUrl('test.png');

        // On n'a pas besoin de persister notre article (si vous le faites aucune erreur n'est déclenchée, Doctrine l'ignore).
        // Rappelez-vous il l'est automatiquement car on l'a récupéré depuis Doctrine.

        // Pas non plus besoin de persister l'image ici, car elle est également récupérée par Doctrine.

        // On déclenche la modification.
        $em->flush();

        return new Response('OK');
    }
    
    public function testAction(){
    	$article = new Article();
    	
    	$article->setDate(new \DateTime());
    	$article->setTitre('abc');				// Champ « titre » incorrect : moins de 10 caractères.
    	//$article->setContenu('blabla');    // Champ « contenu » incorrect : on ne le définit pas.
    	$article->setAuteur('A');            // Champ « auteur » incorrect : moins de 2 caractères.
    	// On récupère le service validator.
    	$validator = $this->get('validator');
    	
    	// On déclenche la validation.
    	$liste_erreurs = $validator->validate($article);
    	
    	// Si le tableau n'est pas vide, on affiche les erreurs.
    	if(count($liste_erreurs) > 0)
    	{
    		return new Response(print_r($liste_erreurs, true));
    	}
    	else
    	{
    		return new Response("L'article est valide !");
    	}
    }

}

?>
