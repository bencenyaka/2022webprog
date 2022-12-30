<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website - About</title>
    <link rel="stylesheet" href="res/style.css">
</head>
<body style="background-image: url(media/image-9.jpg); background-size: cover; background-repeat: no-repeat;
             background-position: center center; background-attachment: fixed; background-color: black; ">

    <header>
        <?php include("res/navigation.php"); ?>
    </header>   

    <section>
        <div class="about-content">
            <div class="about-div">
                <h2>ABOUT ME</h2>
                <hr style="margin-left:25%;margin-right:25%;">

                <div class="container">
                    <?php 

                        $text= file_get_contents("text/about.txt");
                        $image = "media/about.jpg";
                        echo '<img id="about-pic" src="'. $image .'" alt="About Me Picture">';
                        echo '<p>'. $text .'</p>';

                    ?>
                </div>

            </div>
        </div>
    </section>
</body>
</html>