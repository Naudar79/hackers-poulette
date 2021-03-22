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
                    <h1>Contact</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <!--AWA : Container img + liqt of phone numbers-->
                            <img id="mailBox" src="./assets/img/hackers-poulette-logo-neg.png" class="img-fluid" alt="Responsive image">
                            <fieldset>
                                <legend>Ours phone numbers: </legend>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <p>Charleroi : +32 (0)71 12 34 56</p>
                                        <div class="progress">
                                            <!--AWA : Addendum : progress bars as modified by ERP/intranet-->
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%">Occupancy</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <p>Milan : +39 (0)2 36 52 79 13</p>
                                        <div class="progress">
                                            <!--AWA : Addendum : progress bars as modified by ERP/intranet-->
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">Occupancy</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <p>Paris : +33 (0)9 87 36 23 95</p>
                                        <div class="progress">
                                            <!--AWA : Addendum : progress bars as modified by ERP/intranet-->
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">Occupancy</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <p>Dubai : +971 4 244 7291</p>
                                        <div class="progress">
                                            <!--AWA : Addendum : progress bars as modified by ERP/intranet-->
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">Occupancy</div>
                                        </div>
                                    </li>
                                </ul>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <div class="container">
                                <!--AWA : Container contain the form-->
                                <form class="was-validated">
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
                                            <input type="email" class="form-control border border-dark" id="email" placeholder="your mail here" required>
                                            <div class="valid-feedback">Valid</div>
                                            <div class="invalid-feedback">Required</div>
                                        </div>
                                        <div class="form-group">
                                            <!--AWA : block Phone number + validate-->
                                            <!--AWA : Addendum : test number only-->
                                            <label for="phone">Phone number</label>
                                            <input type="text" class="form-control border border-dark" id="phone" placeholder="+32 (0)71 12 23 34" required>
                                            <div class="valid-feedback">Valid</div>
                                            <div class="invalid-feedback">Required</div>
                                        </div>
                                        <div class="form-group">
                                            <!--AWA : block List to select the location-->
                                            <label for="selection">Select your place </label>
                                            <select id="selection" class="form-control border border-dark" required>
                                             <option value="">location...</option>
                                             <option value="">Charleroi (BE)</option>
                                             <option value="">Milan (IT)</option>
                                             <option value="">Paris (FR)</option>
                                             <option value="">Dubai (EK)</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <!--AWA : block List to select the option-->
                                            <label for="selection">Why contact us ? </label>
                                            <select id="selection" class="form-control border border-dark">
                                            <option value="">select...</option>
                                            <option value="">Information</option>
                                            <option value="">Order</option>
                                            <option value="">Reserve</option>
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
    
</body>
</html>


<?php
 echo 'test';
?>