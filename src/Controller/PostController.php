<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\PostType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class PostController extends AbstractController {
    
    #[Route('/posts', name:'posts')]
    public function listPosts(EntityManagerInterface $em)
    {
        $posts = $em->getRepository(Post::class)->findAll();
        
    
        $response = $this->render('post/posts.html.twig', [
            'posts' => $posts
                            ]);
        
        return $response;
    }

    #[Route('/posts/{id}/delete', name:'delete')]
    public function removePost(EntityManagerInterface $em, int $id )
    {
        $posts = $em->getRepository(Post::class)->findAll();
        $post = $em->getRepository(Post::class)->find($id);  
        

        $em->remove($post);
        $em->flush();
    
        $response = $this->render('post/posts.html.twig', [
            'posts' => $posts
                            ]);
        
        return $response;
    }

    /*#[Route('/post2')]
    public function getPost42(EntityManagerInterface $em)
    {
        // Sélection générique
        $posts = $em->getRepository(Post::class)->findBy(['id' => 42]);
        $post = $em->getRepository(Post::class)->findOneBy(['id' => 42]);
        // Sélection par ID
        $post = $em->getRepository(Post::class)->find(42);
        // Sélection "magique" find[One]By<Attribut>($value) :
        $posts = $em->getRepository(Post::class)->findById(42);
        $post = $em->getRepository(Post::class)->findOneById(42);
        // ...  
    }*/

    #[Route('/posts/new', name: 'post_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em)
    {
        // Nouveau Post "vierge"
        $post = new Post();

        // Création formulaire
        $form = $this->createForm(PostType::class, $post);

        $form->handleRequest($request);

        // Si formulaire soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {
            
            // ici, $post contient les données soumises

            // On enregistre
            $em->persist($post);
            $em->flush();

            // On redirige vers l'affichage du post par exemple
            return $this->redirectToRoute('posts', ['
                    id' => $post->getId()]);
        }

        // Si formulaire non soumis OU formulaire invalide
        return $this->render('post/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/posts/{id}', name:'getPost')]
    public function getPost(EntityManagerInterface $em, int $id )
    {

        $post = $em->getRepository(Post::class)->find($id);  
    
        $response = $this->render('post/post.html.twig', [
            'post' => $post
                            ]);
        
        return $response;
    }

    #[Route('/posts/edit/{id}', name:'editPost', methods: ['GET', 'POST'])]
    public function editPost(Request $request, EntityManagerInterface $em, int $id)
    {
        $post = $em->getRepository(Post::class)->find($id);  
        $form = $this->createForm(PostType::class, $post);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
		
            // ici, $post contient les données soumises
                        
            // On enregistre
            $em->persist($post);
            $em->flush();
                        
            // On redirige vers l'affichage du post par exemple
            return $response = $this->render('post/post.html.twig', [
                'post' => $post
                                ]);
            
        }
                        
        // Si formulaire non soumis OU formulaire invalide
        $response = $this->render('post/editpost.html.twig', [
            'post' => $post,
            'form' => $form->createView(),
                            ]);

        return $response;
    }

}