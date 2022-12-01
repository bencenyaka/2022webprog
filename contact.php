<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website - Contact</title>
    <link rel="stylesheet" href="res/style.css">
</head>
<body style="background-image: url(media/image-7.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-color: black;">
    <!--
        underline nav (active, animation)
        index -> home, contact(active), gallery, about
        nav items center
        company logo -> nav left side 
        footer -> nav items, copyright, other links(?)
        contacts: phonenumber, email, place
        https://blog.hubspot.com/service/best-contact-us-pages
    -->
    <header>
        <?php include("res/navigation.php"); ?>
    </header>
    <section id="content">
        <div class="contact-div">
            <h2>Contact</h2>
            <hr style="margin-left:30%;margin-right:30%;">
            <?php

                $databaseName = "database";
                $databaseUser = "admin";
                $databasePsw = "admin";
                            
                $dsn = "mysql:host=localhost;dbname=". $databaseName .";charset=utf8mb4";
                $db = new PDO($dsn, $databaseUser, $databasePsw);

                $valName = "";
                $valEmail = "";
                $valMessage = "";

                if(isset($_POST['sendMessage']))
                {
                    $name = trim($_POST['name']);
                    $email = trim($_POST['email']);
                    $phone_number = ($_POST['phone_number']);
                    $message = trim($_POST['message']);

                    $error = false;

                    if(strlen($name) < 1)
                    {
                        $error = "Please fill it with your name.";
                    }
                    if(strlen($email) < 1)
                    {
                        $error = "Please fill it with your email.";
                    }
                    if(strlen($message) < 1)
                    {
                        $error = "Please fill it with your message.";
                    }

                    if($error)
                    {
                        $valName = $name;
                        $valEmail = $email;
                        $valMessage = $message;

                        echo '<p class="error">Error! '.$error.'</p>';
                    }
                    else
                    {
                        $sql = "INSERT INTO data VALUES(NULL, :name, :email, :phone_number, :message)";
                        $values = [
                            'name' => $name,
                            'email' => $email,
                            'phone_number' => $phone_number,
                            'message' => $message,
                        ];

                        $query = $db->prepare($sql);
                        $query->execute($values);

                        echo '<p class="success">Successful filling.</p>';
                    }
                }

            ?>
            <form method="post" action="contact.php">
                <div>
                    <label for="inName">Full name:<span>*</span></label>
                    <input type="text" name="name" placeholder="Some Body...">
                </div>
                <div>
                    <label for="inEmail">Email:<span>*</span></label>
                    <input type="email" name="email" placeholder="somebody@host.com">
                </div>
                <div>
                    <label for="InPhonenumber">Phone number:</label>
                    <input type="number" name="phone_number" placeholder="01234567891...">
                </div>
                <div>
                    <label for="InMessage">Message:<span>*</span></label>
                    <textarea type="text"  name="message" placeholder="Put your message here."></textarea>
                </div>
                <div>
                    <p><sup><span>*</span><span>mandatory</span></sup></p>
                </div>
                <div style="text-align:center;">
                    <button name="sendMessage">SEND</button>
                </div>
            </form>
        </div>
    </section>
    <footer>
        <div>
            <a href="https://www.facebook.com/" target="blank"><img src="media/facebook.png" alt=""></a>
            <a href="https://www.instagram.com" target="blank"><img src="media/instagram.png" alt=""></a>
            <a href="https://twitter.com" target="blank"><img src="media/twitter.png" alt=""></a>
            <a href="https://www.linkedin.com" target="blank"><img src="media/linkedin.png" alt=""></a>
        </div>
    </footer>
</body>
</html>