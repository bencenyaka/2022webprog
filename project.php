<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website - Projects</title>
    <link rel="stylesheet" href="res/style.css">
</head>
<body style="background-image:url(media/image5.jpg);
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
        <nav>
            <ul>
                <a class="leftNav" href="index.php">Nyaka Bence</a>
                <li><a class="active" href="project.php">Projects</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <div class="project-div">
            <h2>YOUTUBE TO MP3</h2>
            <hr>
            
            <?php 
          
                $text= file_get_contents("text/ytmp3.txt");
                echo'
                <p>'. $text .'</p>';
            ?>
            
            <p>See this project: <a href="https://beny-youtube2mp3vid.herokuapp.com/" target="blank">here</a></p>
        </div>
        <div class="project-div">
            <h2>PERSONAL PORTFOLIO</h2>
            <hr>
            <?php 
          
                $text= file_get_contents("text/portf.txt");
                echo'
                <p>'. $text .'</p>';
            ?>
            
            <p>See this project: <a href="gallery.php#gallery-4" target="blank">here</a></p>
        </div>
    </section>
</body>
</html>