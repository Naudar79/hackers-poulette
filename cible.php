<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>First name : <?php echo $_POST['fName'] ?></p>
    <p>Last name : <?php echo $_POST['lName'] ?></p>
    <p>sex : <?php echo $_POST['genre'] ?></p>
    <p>Email : <?php echo $_POST['eMail'] ?></p>
    <p>Country : <?php echo $_POST['country'] ?></p>
    <p>Reason : <?php echo $_POST['why'] ?></p>
    <p>Message : <?php echo $_POST['message'] ?></p>
    <?php
        $msg = "Nom:\t$fName\n";
        $msg = "Nom:\t$lName\n";
        $msg = "Nom:\t$genre\n";
        $msg .= "E-Mail:\t$eMail\n";
        $msg = "Nom:\t$country\n";
        $msg = "Nom:\t$why\n";
        $msg .= "Message:\t$message\n\n";
        //Pourait continuer ainsi jusqu'à la fin du formulaire

        $recipient = "tonCourriel@mail.com";
        $subject = "Formulaire";

        $mailheaders = "From: Mon test de formulaire<> \n";
        $mailheaders .= "Reply-To: $email\n\n";

        mail($recipient, $subject, $msg, $mailheaders);
    ?>
</body>
</html>
