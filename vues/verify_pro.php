<?php

//Formulaire de contact
if(!empty($_POST))
{
	if(empty($_POST["firstName"])){
		array_push($errors, "veuillez saisir votre nom.");
	}

	if(empty($_POST["lastName"])){
    	array_push($errors, "veuillez saisir votre nom.");
    }

	if(empty($_POST["email"])){
		array_push($errors, "veuillez rentrer votre e.mail.");
	}
	else if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)==FALSE){
		array_push($errors, "email non valide.");
	}

	if(empty($_POST["phone"])){
		array_push($errors, "veuillez rentrer votre téléphone.");
	}

    if(empty($_POST["societyName"])){
		array_push($errors, "veuillez rentrer le nom de votre société.");
	}

	if(empty($_POST["message"])){
		array_push($errors, "veuillez rentrer un message.");
	}

    //si $error est vide
	if(empty($errors)){

        $firstName = strip_tags(htmlspecialchars($_POST['firstName']));
        $lastName = strip_tags(htmlspecialchars($_POST['lastName']));
        $email_address = strip_tags(htmlspecialchars($_POST['email']));
        $phone = strip_tags(htmlspecialchars($_POST['phone']));
        $datePicker = strip_tags(htmlspecialchars($_POST['datePicker']));
        $hours = strip_tags(htmlspecialchars($_POST['hours']));
        $societyName = strip_tags(htmlspecialchars($_POST['societyName']));
        $participants = strip_tags(htmlspecialchars($_POST['participants']));
        $message = strip_tags(htmlspecialchars($_POST['message']));


        // Create the email and send the message
        $to = "matimae33@gmail.com, sabinecaizergues@hotmail.com";
        $email_subject = "[Demande de devis GROUPE] www.xtremfly.fr";
        $email_body = "Bonjour, vous avez un nouveau message depuis la page 'Groupe et CE' de votre site internet : \n\n\n";
        $email_body .= "Auteur : $firstName $lastName\n";
        $email_body .= "Email du contact : $email_address\n";
        $email_body .= "Téléphone du contact : $phone\n";
        $email_body .= "Nom de la société : $societyName\n";
        $email_body .= "Date souhaitée : $datePicker\n";
        $email_body .= "Heure souhaitée : $hours\n";
        $email_body .= "Nombre de participants : $participants\n\n\n";
        $email_body .= "Message : \n\n $message";
		$headers = "From : $email_address\r\n" . "Reply-To: $email_address\r\n" . "X-Mailer: PHP/" . phpversion();

		$result = mail($to, $email_subject, $email_body, $headers);

		$success = "Votre message a bien été envoyé.";
	}
}
