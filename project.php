<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website - Projects</title>
    <link rel="stylesheet" href="res/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body style="background-image:url(media/image5.jpg); background-size: cover; background-repeat: no-repeat;
             background-position: center center; background-attachment: fixed; background-color: black;">

    <header>
        <?php include("res/navigation.php"); ?>
    </header>

    <section>
        <div class="project-div">
            <h2>Youtube to mp3</h2>
            <hr>
            
            <?php 
          
                $text= file_get_contents("text/ytmp3.txt");
                echo'
                <img id="desc-pic" src="media/1.png" alt="Project YTTOMP3">
                <p>'. $text .'</p>';

            ?>

            <p>Keywords: <span>HTML</span><span>CSS</span><span>Javascript</span><span>Express</span><span>Node.JS</span></p>
            
            <p>See this project: <a href="https://dark-elk-kilt.cyclic.app/" target="blank">here</a></p>

        </div>

        <div class="project-div" data-aos="fade">
            <h2>Personal Portfolio</h2>
            <hr>
            <?php 
          
                $text= file_get_contents("text/portf.txt");
                echo'
                <img id="desc-pic" src="media/4.2.png" alt="Project YTTOMP3">
                <p>'. $text .'</p>';

            ?>

            <p>Keywords: <span>HTML</span><span>CSS</span><span>Javascript</span><span>Responsive</span></p>
            
            <p>See this project: <a href="https://bencenyaka.github.io/personal_portfolio/" target="blank">here</a></p>
            
        </div>

        <div class="project-div" data-aos="fade">
            <h2>Weather app</h2>
            <hr>
            <?php 
          
                $text= file_get_contents("text/wapp.txt");
                echo'
                <img id="desc-pic" src="media/7.png" alt="Weather App">
                <p>'. $text .'</p>';

            ?>

            <p>Keywords: <span>HTML</span><span>CSS</span><span>Javascript</span><span>Openweathermap-API</span></p>
            
            <p>See this project: <a href="https://bencenyaka.github.io/weather_app/" target="blank">here</a></p>
            
        </div>

        <div class="project-div" data-aos="fade">
            <h2>Calculator</h2>
            <hr>
            <?php 
          
                $text= file_get_contents("text/calc.txt");
                echo'
                <img id="desc-pic" src="media/8.png" alt="Weather App">
                <p>'. $text .'</p>';

            ?>

            <p>Keywords: <span>HTML</span><span>CSS</span><span>Javascript</span></p>
            
            <p>See this project: <a href="https://bencenyaka.github.io/calculator/" target="blank">here</a></p>
            
        </div>
    </section>

    <!-- AOS animation https://github.com/michalsnik/aos -->

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 2000,
            once: true,
        });
    </script>

</body>
</html>