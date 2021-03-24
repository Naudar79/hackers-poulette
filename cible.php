<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Merci pour votre message :</p>
    <p>First name : <?php echo $_POST['fName'] ?></p>
    <p>Last name : <?php echo $_POST['lName'] ?></p>
    <p>sex : <?php echo $_POST['genre'] ?></p>
    <p>Email : <?php echo $_POST['eMail'] ?></p>
    <p>Country : <?php echo $_POST['country'] ?></p>
    <p>Reason : <?php echo $_POST['why'] ?></p>
    <p>Message : <?php echo $_POST['message'] ?></p>
    <p>Nous vous répondons dans les plus brefs délais.</p>

    <?php
        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $genre = $_POST['genre'];
        $eMail = $_POST['eMail'];
        $country = $_POST['country'];
        $why = $_POST['why'];
        $message = $_POST['message'];
        $msgMail = "First Name:".$fName."\r\n";
        $msgMail .= "Last Name:".$lName."\r\n";
        $msgMail .= "Sex:".$genre."\r\n";
        $msgMail .= "E-Mail:".$eMail."\r\n";
        $msgMail .= "Country:".$country."\r\n";
        $msgMail .= "Reason:".$why."\r\n";
        $msgMail .= "Message:".$message."\r\n";

        $to = "becode.awa@gmail.com";
        $subject = "Formulaire";

        $mailheaders = "From: Mon test de formulaire<> \n";
        $mailheaders .= "Reply-To: $email\n\n";

        mail($to, $subject, $msgMail, $mailheaders);
    ?>
</body>
</html>
