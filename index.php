<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/img/style.css">
    <title>HP - Contact</title>
</head>
<body>
    <header>
    <p>*ici se trouvera le menu du site*</p>
    </header>
    <main>
        <article>
            <section class="frmContact">
                <!--AWA : Page for contact-->
                <div class="container-md p-3 my-3 border align-content-lg-center" id="content">
                    <!--AWA : General container-->
                    <div class="row">
                        <div class="col-md-6">
                            <!--AWA : Container img + liqt of phone numbers-->
                            <img id="mailBox" src="./assets/img/hackers-poulette-logo-neg.png" class="img-fluid" alt="Responsive image">
                            <fieldset>
                                <legend>Visit us: </legend>
                                <section id="adresse">
                                    <p>Rue trucmuche, 58</p>
                                    <p>6001 Marcinelles</p>
                                    <p>Phone : +32 (0)71 12 34 56</p>
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
                                <form class="was-validated">
                                    <h1>Contact</h1>
                                    <fieldset>
                                        <legend>Contact us with this form: </legend>
                                        <div class="form-group">
                                            <!--AWA : block firstname + validate-->
                                            <label for="firstName">Firstname</label>
                                            <input type="text" class="form-control border border-dark" id="fName" placeholder="Firstname" required>
                                            <div class="valid-feedback">Valid</div>
                                            <div class="invalid-feedback">Required</div>
                                        </div>
                                        <div class="form-group">
                                            <!--AWA : block Lastname + validate-->
                                            <label for="lastname">Lastname</label>
                                            <input type="text" class="form-control border border-dark" id="lName" placeholder="Lastname" required>
                                            <div class="valid-feedback">Valid</div>
                                            <div class="invalid-feedback">Required</div>
                                        </div>
                                        <div class="form-group">
                                            <!--AWA : block Email + validate-->
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control border border-dark" id="email" placeholder="Email" required>
                                            <div class="valid-feedback">Valid</div>
                                            <div class="invalid-feedback">Required</div>
                                        </div>
                                        <div class="form-group">
                                            <!--AWA : block Email + validate-->
                                            <label for="country">Country</label>
                                            <input type="text" class="form-control border border-dark" id="country" placeholder="Country" required>
                                            <div class="valid-feedback">Valid</div>
                                            <div class="invalid-feedback">Required</div>
                                        </div>                                        
                                        <div class="form-group">
                                            <!--AWA : block List to select the option-->
                                            <label for="selection">Why contact us ? </label>
                                            <select id="selection" class="form-control border border-dark">
                                            <option value="0">select...</option>
                                            <option value="1">Information</option>
                                            <option value="2">Price</option>
                                            <option value="3">Assistance</option>
                                            </select>
                                        </div>
                                            <div class="form-group">
                                                <label for="message">Message</label>
                                                <!--AWA : block message box-->
                                                <textarea class="form-control border border-dark" id="message" rows="3"></textarea>
                                            </div>
                                            <div class="form-group form-check">
                                                <!--AWA : block check private policy-->
                                                <!--AWA : Addendum : create a rules : if checkbox is not checked, get button inactive-->
                                                <label class="form-check-label">
                                                 <input class="form-check-input border border-dark" type="checkbox" name="remember" required> I agree on <a href="#">terms of use</a>
                                                 <div class="valid-feedback">Valid</div>
                                                 <div class="invalid-feedback">Check this checkbox befor submit</div>
                                                </label>
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
        <p>
            *ici se trouve le footer*
        </p>
    </footer>
</body>
</html>