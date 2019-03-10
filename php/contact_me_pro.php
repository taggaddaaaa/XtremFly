<?php
// Check for empty fields
if (empty($_POST['firstName']) ||
    empty($_POST['lastName'])  ||
    empty($_POST['email']) ||
    empty($_POST['phone']) ||
    empty($_POST['datePicker']) ||
    empty($_POST['hours']) ||
    empty($_POST['societyName']) ||
    empty($_POST['participants']) ||
    empty($_POST['message']) ||
    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
	echo "Aucune données du formulaire reçues";
} else {
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email_address = $_POST['email'];
	$phone = $_POST['phone'];
	$datePicker = $_POST['datePicker'];
	$hours = $_POST['hours'];
	$societyName = $_POST['societyName'];
	$participants = $_POST['participants'];
	$message = $_POST['message'];

	/**
	 * CREATE THE EMAIL AND SEND IT
	 * 1: Declaration of destination.
	 * 2: Filter on servers that have encountered bugs with the newline.
	 * 3: Message declaration of the e-mail in text version
	 * 4: Creation of the subject
	 * 5: Creation of the e-mail header
	 * 6: Creation of the message
	 * 7: Sending the email
	 */
//	$mail = 'taggaddaaaawebstudio@gmail.com'; // For debugging
//	$mail = 'matimae33@gmail.com'; // For Ludivine and Guillaume throw gmail directly.
//	$mail = 'matimae33@gmail.com, taggaddaaaawebstudio@gmail.com'; // For emergency.
	$mail = 'form@xtremfly.fr'; // For general sending.

	if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) {
		$simple_passage_ligne = "\r\n";
		$double_passage_ligne = "\r\n\r\n";
	} else {
		$simple_passage_ligne = "\n";
		$double_passage_ligne = "\n\n";
	}

	$message_txt = "Bonjour," .$simple_passage_ligne.  "vous avez un nouveau message depuis votre formulaire de contact PRO de votre site internet:".$double_passage_ligne;
	$message_txt .= "Auteur: ".$firstName. " ".$lastName.$simple_passage_ligne;
	$message_txt .= "Email du contact: ".$email_address.$simple_passage_ligne;
	$message_txt .= "Tel. du contact: ".$phone.$double_passage_ligne;
	$message_txt .= "Date et heure choisie: ".$datePicker." à ".$hours.$double_passage_ligne;
	$message_txt .= "Nombre de participants: ".$participants.$double_passage_ligne;
	$message_txt .= "Message:".$simple_passage_ligne.$message;

	$subject = "[Formulaire de contact PRO] www.xtremfly.fr";

	$header = "From: \"Xtremfly\"<noreply@xtremfly.fr>".$simple_passage_ligne;
	$header.= "Reply-to: \"$email_address\" <$email_address>".$simple_passage_ligne;
	$header.= "MIME-Version: 1.0".$simple_passage_ligne;
	$header.= "Content-Type: text/plain; charset=\"ISO - 8859 - 1\"".$simple_passage_ligne;
	$header.= "Content-Transfer-Encoding: 8bit".$simple_passage_ligne;

	$email_body= $message_txt.$simple_passage_ligne;

	mail($mail,$subject,$email_body,$header);
	return true;
}
