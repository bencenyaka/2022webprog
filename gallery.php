<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website - Gallery</title>
    <link rel="stylesheet" href="res/gallery.css">
    <!-- Fancybox and Jquery CDN
    This link get github repository -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</head>
<body style="background-image: url(media/image-6.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-color: black;">
    <!--
        underline nav (active, animation)
        index -> home, contact, gallery(active), about
        nav items center
        company logo -> nav left side 
        footer -> nav items, copyright, other links(?)
        gallery items -> fancybox (https://fancyapps.com/fancybox/)
    -->
    <header>
        <?php include("res/navigation.php"); ?>
    </header>

    <section>
        <h2>YOUTUBE TO MP3</h2>
        <hr>
        <div class="gal-div">
            <a data-fancybox="gallery" href="media/1.png"><img src="media/1.png"></a>
            <a data-fancybox="gallery" href="media/2.png"><img src="media/2.png"></a>
            <a data-fancybox="gallery" href="media/3.png"><img src="media/3.png"></a>
        </div>
        
        <h2>PERSONAL PORTFOLIO</h2>
        <hr>
        <div class="gal-div">
            <a data-fancybox="gallery" href="media/4.png"><img src="media/4.png"></a>
            <a data-fancybox="gallery" href="media/5.png"><img src="media/5.png"></a>
            <a data-fancybox="gallery" href="media/6.png"><img src="media/6.png"></a>
        </div>
    </section>
</body>
</html>