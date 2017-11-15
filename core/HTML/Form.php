<?php


namespace Core\HTML;


/**

* @param $html string Code HTML à entourer

* @return string

*/




class Form

{
    private $data;

    public $surround = 'p';

    public function __construct($data = array())
    {

        $this->data = $data;

    }


    protected function surround($html)
    {
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }


    /**
     * @param $index string Index de la valeur à récuperer
     * @return string
     */




    protected function getValue($index)
    {
        if (is_object($this->data)) {

            return $this->data->$index;
        }

        return isset($this->data[$index]) ? $this->data[$index] : null;

    }

    /**
     * Class Form
     * Permet de générer la page
     */


    public function input($name, $label, $options = [])

    {
        $type = isset($options['type']) ? $options['type'] : 'text';


        return $this->surround('<input type = "' . $type . '" name="' . $name . '"value="' . $this->getValue($name) . '/>');
    }




    public function submit()

    {
        return $this->surround('<button type="submit">Envoyer</button>');
    }

    public function contact() {

//Formulaire d'envoi

// Vérification des champs vides

if(empty($_POST['name'])       ||
    empty($_POST['email'])     ||
    empty($_POST['phone'])     ||
    empty($_POST['message'])   ||
    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
{
    echo "Veuillez remplir les champs vides";
    return false;
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

//Création de l'émail et l'envoi de celui ci

$to = 'noreplay@blogdevsblog.com'; // L'adress de l'expediteur
$email_subject = "Objet:  $name";
$email_body = "Un nouveau message reçu du blog\n\n"."Voici les details:\n\nNom: $name\n\nEmail: $email_address\n\nTéléphone: $phone\n\nMessage:\n$message";
$headers = "De: noreply@blogdevsblog.com\n"; // email de l'expediteur
$headers .= "Répondre au : $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;

    }
}
