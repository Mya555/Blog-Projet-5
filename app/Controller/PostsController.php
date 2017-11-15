<?php


namespace App\Controller;

use Core\Controller\Controller;
use Core\HTML\BootstrapForm;


/**
 * Class PostsController
 * @package App\Controller
 *  Chargé de s'occuper des des pages et leurs contenus
 */
class PostsController extends AppController
{
    /**
     * PostsController constructor.
     */
    public function __construct()
    {
        parent::__construct();

         $this->loadModel('Post');

    }

    /**
     * Page d'accuiel listant les differents posts
     */

    public function index()
    {

        $this->render('posts.index');

    }

    /*
     * Permet d'afficher une list des posts trié par la date décroissante
     */
    public function listP()
    {


        $posts = $this->Post->last();


        /*
         * compact — Crée un tableau à partir de variables et de leur valeur
         */
        $this->render('posts.listB', compact('posts'));

    }

    /*
     * Permet d'afficher un post en particulier
     */
    public function show()
    {

        $article = $this->Post->find($_GET['id']);

        $this->render('posts.show', compact('article'));


    }

    /*
     * Permet d'éditer un post
     */
    public function edit()
    {


        if (!empty($_POST)) {

            $result = $this->Post->update($_GET['id'], [

                'titre' => $_POST['titre'],

                'chapo' => $_POST['chapo'],

                'contenu' => $_POST['contenu'],

                'auteur' => $_POST['auteur'],

                'dateDernierModif' => date("Y-m-d  H:i:s ")]);

            if ($result) {

                return $this->listP();
            }
        }

        $post = $this->Post->find($_GET['id']);

        $form = new BootstrapForm($post);

        $this->render('posts.edit', compact( 'form'));

    }






    /*
     * Permet d'ajouter un post
     */
    public function add()
    {
        $date = date("Y-m-d  H:i:s ");



        if (!empty($_POST)) {

            $result = $this->Post->create([

                'titre' => $_POST['titre'],

                'contenu' => $_POST['contenu'],

                'dateDernierModif' => $date ]);

                return $this->listP();

            }

        $form = new BootstrapForm($_POST);

        $this->render('posts.add', compact( 'form'));
    }

    /*
     * Fonction d'envoie pour le formulaire de contact
     */
    public function contact(){

// Vérification pour les champs vides

if(empty($_POST['name'])      ||
    empty($_POST['email'])     ||
    empty($_POST['phone'])     ||
    empty($_POST['message'])   ||
    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
{
    echo "Veuillez remplir tous les champs.";

    return $this->index();
}

    $name = strip_tags(htmlspecialchars($_POST['name']));
    $email_address = strip_tags(htmlspecialchars($_POST['email']));
    $phone = strip_tags(htmlspecialchars($_POST['phone']));
    $message = strip_tags(htmlspecialchars($_POST['message']));

    // Créé l'email et l'envoie
    $to = 'text_me2@protonmail.com';
    $email_subject = "Contact du Blog:  $name";
    $email_body = "Vous avez reçu un nouveau message du Blog.\n\n"."Voici les details:\n\nNom: $name\n\nEmail: $email_address\n\nNumero de téléphone: $phone\n\nMessage:\n$message";
    $headers = "De: noreply@devsblog.com\n";
    $headers .= "Répondre au: $email_address";
    mail($to,$email_subject,$email_body,$headers);
    return $this->index();


    }

}


