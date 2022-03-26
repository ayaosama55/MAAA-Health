

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Google Project</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style2.css">
    </head>
    <body>
        <section class="main">

            <div class="container content">
                <div class="logo">Welcome in <img src="imgs/2.png" ></div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="qr">
                            <img src="imgs/qr.jpg" >
                        </div>
                        <div class="steps">
                            <ol>
                                <li class="step">Open MAAA in Your Phone</li>
                                <li class="step">From Setting Choose Scan QRCode</li>
                                <li class="step">Point your phone at this screen to capture the QRCode</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form_MRN">
                            <div class="form_Register">
                                <h2>Register Using MRN</h2>
                                <p class="lead">Make sure you enter the correct code and from uppercase and lowercase letters</p>
                                <form action="register.php" method="GET">
                                    <input class="form-control form-control-lg" type="text" placeholder="Enter MRN" name="mrn" aria-label=".form-control-lg example">
                                    <button type="submit" class="btn mb-3">Confirm</button>
                                </form>
                            </div>
                            <div class="form-Generate">
                                <h2>Create New MRN</h2>
                                <p class="lead">Be Sure From Entering Correct Data</p>
                                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input class="form-control form-control-lg " type="text" placeholder="Enter Your Name" name="name" aria-label=".form-control-lg example">
                                        </div>
                                        <div class="col-md-6">
                                            <input class="form-control form-control-lg col-md-6" type="text" placeholder="Enter SSN" name="ssn" aria-label=".form-control-lg example">
                                        </div>
                                        <div class="col-md-6">
                                            <input class="form-control form-control-lg col-md-6" type="text" placeholder="Enter Your Address" name="address" aria-label=".form-control-lg example">
                                        </div>
                                        <div class="col-md-6">
                                            <input class="form-control form-control-lg col-md-6" type="number" placeholder="Enter Your Age" name="age" aria-label=".form-control-lg example">
                                        </div>
                                        <div class="col-md-6">
                                            <input class="form-control form-control-lg col-md-6" type="text" placeholder="Enter Your Phone" name="phone" aria-label=".form-control-lg example">
                                        </div>
                                        <div class="state col-md-12">
                                            <label>Your State : </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">Single</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">Married</label>
                                            </div>
                                        </div>
                                        <div class="bbttnn">
                                            <button type="submit" class="btn mb-3">Create MRN</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="form-doc">
                                <form action="#" method="GET">
                                    <h2>Login as a Doctor</h2>
                                    <input class="form-control form-control-lg " type="text" placeholder="Username" name="name" aria-label=".form-control-lg example">
                                    <input class="form-control form-control-lg " type="password" placeholder="Password" name="name" aria-label=".form-control-lg example">
                                    <button type="submit" class="btn mb-3">Login</button>
                                </form>
                            </div>
                            <span class="Generate_mrn">Create MRN.!</span>
                            <span class="back">&lt;&lt;Back</span>
                            <span class="doc">Login as a Doctor</span>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/file.js"></script>
    </body>
</html>
<?php
//echo $_SERVER['REQUEST_METHOD'];
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $list = array('$', '#', '&', '_');
    $name = $_POST['name'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $ssn = $_POST['ssn'];
    $MRN = strtoupper(substr($name, 0, 3));
    shuffle($list);
    $MRN .= $list[0];
    $MRN .= substr($ssn, 0, 5);
    shuffle($list);
    $MRN .= $list[0];
    $MRN .= substr($phone, 7, 3);
    echo "<div class='layout'><div class='alert'>";
    echo "<button>X</button>Your Medical Record Number Is : <span>" . $MRN;
    echo "</span></div></div>";
} else {

}
?>
