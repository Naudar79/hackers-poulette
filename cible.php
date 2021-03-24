<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/img/style.css">
    <link rel="icon" type="image/png" href="./assets/img/hackers-poulette.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../Single%20Page%20Site/assets/img/Logo.png">
    <script src="./assets/responsiveMenu.js"></script>
    <title>Document</title>
</head>
<body>
<header>
      <nav>
        <div class="topnav" id="myTopnav">
            <a href="#" class="active">Home</a>
            <a href="#">News</a>
            <a href="#">Product</a>
            <a href="#">Contact</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
      </nav>
    </header>
    <main>
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
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;
        require 'vendor/autoload.php';

        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $genre = $_POST['genre'];
        $eMail = $_POST['eMail'];
        $country = $_POST['country'];
        $why = $_POST['why'];
        $message = $_POST['message'];
        
  
        $mail = new PHPMailer(true);

        try {
            //Server settings
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp-mail.outlook.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'becode.awa@outlook.com';                     //SMTP username
            $mail->Password   = 'formation1979';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('becode.awa@outlook.com', 'no-reply');
            $mail->addAddress($eMail, $fName);     //Add a recipient


            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = "Formulaire : $why";
            $mail->Body    = "Name : $genre $fName $lName <br> From : $eMail <br> Country : $country <br> Content : $message ";
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    ?>
    </main>
    <footer>
    <div id="foot">
            <p>Footer</p>
        </div>
    </footer>
</body>
</html>
