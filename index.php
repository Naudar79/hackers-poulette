<?php
   // require 'cible.php';
?>
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

    <title>HP - Contact form</title>
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
        <article>
            <section class="frmContact">
                <!--AWA : Page for contact-->
                <div class="container-md p-3 my-3 border align-content-lg-center" id="content">
                    <!--AWA : General container-->
                    <div class="row">
                        <div class="col-md-6">
                            <!--AWA : Container img-->
                            <img id="mailBox" src="./assets/img/hackers-poulette-logo-neg.png" class="img-fluid" alt="Logo hackers-poulette">
                            <fieldset>
                                <legend>Visit us: </legend>
                                <section id="adresse">  
                                    <ul class="horaire">
                                        <li>
                                            <p>Rue trucmuche, 58</p>
                                        </li>
                                        <li>
                                            <p>6001 Marcinelles</p>
                                        </li>
                                        <li>
                                            <p>Phone : +32 (0)71 12 34 56</p>
                                        </li>
                                    </ul>
                                    <hr id="ligne">
                                </section>
                                <ul class="horaire">
                                    <li class="day">
                                        <p>Mon: closed | 13h30 - 17h00</p>
                                    </li>
                                    <li class="day">
                                        <p>Tue: 9h00 - 12h30 | 13h30 - 17h00</p>
                                    </li>
                                    <li class="day">
                                        <p>Wed: 9h00 - 12h30 | 13h30 - 17h00</p>
                                    </li>
                                    <li class="day">
                                        <p>Thu: 9h00 - 12h30 | 13h30 - 17h00</p>
                                    </li>
                                    <li class="day">
                                        <p>Fri: 9h00 - 12h30 | 13h30 - 17h00</p>
                                    </li>
                                    <li class="day">
                                        <p>Sat: 9h00 - 12h30 | 13h30 - 17h00</p>
                                    </li>
                                    <li class="day">
                                        <p>Sun: Closed</p>
                                    </li>
                                </ul>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <div class="container">
                                <!--AWA : Container contain the form-->
                                <form class="was-validated" action="cible.php" method="POST">
                                    <h2>Contact</h2>
                                    <fieldset>
                                        <legend>Contact us with this form: </legend>
                                        <div class="form-group">
                                            <!--AWA : block firstname + validate-->
                                            <label for="firstName">Firstname</label>
                                            <input type="text" class="form-control border border-dark" id="fName" name="fName" placeholder="Firstname" required>
                                            <div class="valid-feedback">Valid</div>
                                            <div class="invalid-feedback">Required</div>
                                        </div>
                                        <div class="form-group">
                                            <!--AWA : block Lastname + validate-->
                                            <label for="lastname">Lastname</label>
                                            <input type="text" class="form-control border border-dark" id="lName" name="lName" placeholder="Lastname" required>
                                            <div class="valid-feedback">Valid</div>
                                            <div class="invalid-feedback">Required</div>
                                        </div>
                                            <label for="sex">choice your sex:</label>
                                            <div>
                                                <input type="radio" id="man" name="genre" value="man" checked require>
                                                <label for="man">♂</label>
                                            
                                                <input type="radio" id="woman" name="genre" value="woman">
                                                <label for="woman">♀</label>

                                                <input type="radio" id="noGenre" name="genre" value="X">
                                                <label for="noGenre">?</label>
                                            </div>

                                        <div class="form-group">
                                            <!--AWA : block Email + validate-->
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control border border-dark" id="email" name="eMail" placeholder="Email" required>
                                            <div class="valid-feedback">Valid</div>
                                            <div class="invalid-feedback">Required</div>
                                        </div>
                                        <div class="form-group">
                                            <!--AWA : block Email + validate-->
                                            <label for="country">Country</label>
                                            <input type="text" class="form-control border border-dark" id="country" name="country" placeholder="Country" required>
                                            <div class="valid-feedback">Valid</div>
                                            <div class="invalid-feedback">Required</div>
                                        </div>                                        
                                        <div class="form-group">
                                            <!--AWA : block List to select the option-->
                                            <label for="selection">Why contact us ? </label>
                                            <select id="selection" class="form-control border border-dark" name="why">
                                            <option value="Other">Other...</option>
                                            <option value="Information">Information</option>
                                            <option value="Price">Price</option>
                                            <option value="Assistance">Assistance</option>
                                            </select>
                                        </div>
                                            <div class="form-group">
                                                <label for="message">Message</label>
                                                <!--AWA : block message box-->
                                                <textarea class="form-control border border-dark" id="message" rows="3" name="message" required></textarea>
                                                <div class="valid-feedback">Valid</div>
                                                <div class="invalid-feedback">Required</div>
                                            </div>
                                            <div class="form-group form-check">
                                            </div>
                                            <!--AWA : Submit button-->
                                            <!--AWA : Addendum : default = inactive. if all label is "validate" activate the button-->
                                            <!--AWA : Addendum : on submit pull the form by mail or into the ERP-->
                                            <input class="btn btn-primary" type="submit" value="Submit" id="submit">
                                    </fieldset>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </article>
    </main>
    <footer>
        <div id="foot">
            <p>Footer</p>
        </div>
    </footer>
</body>
</html>