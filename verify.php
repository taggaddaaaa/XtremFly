<?php

//Formulaire de contact
if(!empty($_POST))
{
    //si le prenom est vide
	if(empty($_POST["name"])){
        // ajouter une erreur au tableau $error
		array_push($errors, "veuillez saisir votre nom");
	}

    //si le telephone est vide
	if(empty($_POST["phone"])){
        // ajouter une erreur au tableau $error
		array_push($errors, "veuillez rentrer votre téléphone");
	}

    //si l email est vide
	if(empty($_POST["email"])){
        // ajouter une erreur au tableau $error
		array_push($errors, "veuillez rentrer votre e.mail");
	}
	else if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)==FALSE){
		array_push($errors, "email non valide");
	}

    // si le message est vide
	if(empty($_POST["message"])){
        // ajouter une erreur au tableau
		array_push($errors, "veuillez rentrer un message");
	}

    //si $error est vide
	if(empty($errors)){

        $name = strip_tags(htmlspecialchars($_POST['name']));
        $email_address = strip_tags(htmlspecialchars($_POST['email']));
        $phone = strip_tags(htmlspecialchars($_POST['phone']));
        $message = strip_tags(htmlspecialchars($_POST['message']));


        // Create the email and send the message
        $to = "matimae33@gmail.com, sabinecaizergues@hotmail.com";
        $email_subject = "[Formulaire de contact] www.xtremfly.fr";
        $email_body = "Bonjour, vous avez un nouveau message depuis votre site internet : \n\n\n";
        $email_body .= "Auteur : $name\n";
        $email_body .= "Email du contact : $email_address\n";
        $email_body .= "Tel. du contact : $phone\n\n\n";
        $email_body .= "Message : \n\n $message";
        //$headers = "From : $email_address\r\n";
		$headers = "From : $email_address\r\n" . "Reply-To: $email_address\r\n" . "X-Mailer: PHP/" . phpversion();


		$result = mail($to, $email_subject, $email_body, $headers);

		$success = "Votre message a bien été envoyé.";
	}
}
