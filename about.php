<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website - About</title>
    <link rel="stylesheet" href="res/style.css?version=5;">
</head>
<body style="background-image: url(media/image4.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-color: black;">
    <!--
        underline nav (active, animation)
        about -> home, contact, gallery, about(active)
        nav items center
        company logo -> nav left side 
        h2 -> p -> img -> p end
        footer -> nav items, copyright, other links(?)
    -->
    <header>
        <nav>
            <ul>
                <a class="leftNav" href="index.php">Nyaka Bence</a>
                <li><a href="project.php">Projects</a></li>
                <li><a class="active" href="about.php">About</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>   

    <section>
        <div class="about-content">
            <div class="about-div">
                <h2>ABOUT ME/US</h2>
                <hr style="margin-left:25%;margin-right:25%;">
                <?php 
                
                $text= file_get_contents("text/about.txt");
                echo'
                <p>'. $text .'</p>';
                ?>
            </div>
        </div>
    </section>
</body>
</html>