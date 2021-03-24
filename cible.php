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
        $msgMail = "First Name:".$fName."\n";
        $msgMail .= "Last Name:".$lName."\n";
        $msgMail .= "Sex:".$genre."\n";
        $msgMail .= "E-Mail:".$eMail."\n";
        $msgMail .= "Country:".$country."\n";
        $msgMail .= "Reason:".$why."\n";
        $msgMail .= "Message:".$message."\n";

        $recipient = "hpawa@yopmail.com";
        $subject = "Formulaire";

        $mailheaders = "From: Mon test de formulaire<> \n";
        $mailheaders .= "Reply-To: $email\n\n";

        mail($recipient, $subject, $msg, $mailheaders);
    ?>
</body>
</html>
