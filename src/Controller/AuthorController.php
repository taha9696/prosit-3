<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    
    public function index(): Response
    {
        return $this->render('author/index.html.twig', [
            'controller_name' => 'AuthorController',
        ]);
    }

    
    public function showAuthor ( $name ){
        return $this->render('author/show.html.twig',[
            'n'=>$name
        ]);
    }

    public function list() 
    {
        $authors = array(
            array('id' => 1, 'picture' => '/images/Victor_Hugo.jpg','username' => ' Victor
            Hugo', 'email' => 'victor.hugo@gmail.com ', 'nb_books' => 100),
            array('id' => 2, 'picture' => '/images/william_shakespeare.jpg','username' => '
            William Shakespeare', 'email' => ' william.shakespeare@gmail.com', 'nb_books' =>
            200 ),
            array('id' => 3, 'picture' => '/images/Taha_Hussein.jpg','username' => ' Taha
            Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300),);
            
            return $this->render('author/list.html.twig', ['authors' => $authors]);
        }
        public function authorDetails ($id){
            $authors = array(
                array('id' => 1, 'picture' => '/images/Victor_Hugo.jpg','username' => ' Victor
                Hugo', 'email' => 'victor.hugo@gmail.com ', 'nb_books' => 100),
                array('id' => 2, 'picture' => '/images/william_shakespeare.jpg','username' => '
                William Shakespeare', 'email' => ' william.shakespeare@gmail.com', 'nb_books' =>
                200 ),
                array('id' => 3, 'picture' => '/images/Taha_Hussein.jpg','username' => ' Taha
                Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300),);
    
            $author=NULL;
            foreach($authors as $a)
            {
                if($a['id'] == $id)
                {
                    $author =$a;
                    
                    break;
                }
            }
    
            return $this->render('author/showAuthor.html.twig',['author' => $author]);
        }
    

    


   
}