<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website - Contact</title>
    <link rel="stylesheet" href="res/style.css">
</head>
<body style="background-image: url(media/image-7.jpg); background-size: cover; background-repeat: no-repeat;
            background-position: center center; background-attachment: fixed;  background-color: black;">

    <header>
        <?php include("res/navigation.php"); ?>
    </header>

    <section id="content">
        <div class="contact-div">
            <h2>Contact</h2>
            <hr>

            <form method="post" action="contact.php">
                <div>
                    <label for="inName">Full name:<span>*</span></label>
                    <input type="text" name="name" placeholder="Some Body">
                </div>
                <div>
                    <label for="inEmail">Email:<span>*</span></label>
                    <input type="email" name="email" placeholder="somebody@host.com">
                </div>
                <div>
                    <label for="InPhonenumber">Phone number: <span style="font-weigth: bold; font-size: 10px; color: #ffff;">(optional)</span></label>
                    <input type="tel" name="phone_number" placeholder="01234567891">
                </div>
                <div>
                    <label for="InMessage">Message:<span>*</span></label>
                    <textarea type="text"  name="message" placeholder="Write your message here."></textarea>
                </div>
                <div>
                    <p><sup><span>*</span><span>mandatory</span></sup></p>
                </div>
                <div style="text-align:center;">
                    <button name="sendMessage">SEND</button>
                </div>
            </form>

            <?php

                $databaseName = "database";
                $databaseUser = "admin";
                $databasePsw = "admin";
                            
                $dsn = "mysql:host=localhost;dbname=". $databaseName .";charset=utf8mb4";
                $db = new PDO($dsn, $databaseUser, $databasePsw);

                $vName = "";
                $vEmail = "";
                $vMessage = "";
                $vPhonenumber = 0;

                if(isset($_POST['sendMessage']))
                {
                    $name = trim($_POST['name']);
                    $email = trim($_POST['email']);
                    $phone_number = $_POST['phone_number'];
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
                    if(is_numeric($phone_number) == false && empty($phone_number) == false){
                        $error = "Please fill it with your phone number.";
                    }
                    if($error)
                    {
                        $vName = $name;
                        $vEmail = $email;
                        $vPhonenumber = $phone_number;
                        $vMessage = $message;
                        
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

                        /* File kiírás */

                        $file = fopen("contacts.txt", "a") or die("Unable to open this file.");
                        $mesfile = fopen("messages.txt", "a") or die("Unable to open this file.");
                        
                        $txt = $name . " | " . $email . " | " . $phone_number . "\n\n";
                        $mestxt = $name . " | " . $message . "\n\n";

                        fwrite($file, $txt);
                        
                        fwrite($mesfile, $mestxt);
                        
                        fclose($file);
                        fclose($mesfile);

                    }
                }

            ?>
        </div>
    </section>
    
    <footer>
        <div>
            <a href="https://www.facebook.com/PTE1367" target="blank"><img src="media/facebook.png" alt="Facebook Page"></a>
            <a href="https://www.instagram.com/ptettk/" target="blank"><img src="media/instagram.png" alt="Instagram Page"></a>
            <a href="https://twitter.com/JeremyClarkson" target="blank"><img src="media/twitter.png" alt="Twitter Page"></a>
            <a href="https://www.linkedin.com" target="blank"><img src="media/linkedin.png" alt="LinkedIn Page"></a>
        </div>
    </footer>
</body>
</html>