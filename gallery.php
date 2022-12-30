<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website - Gallery</title>
    <link rel="stylesheet" href="res/style.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</head>
<body style="background-image: url(media/image-6.jpg); background-size: cover; background-repeat: no-repeat; 
             background-position: center center; background-attachment: fixed; background-color: black;">
    
    <header>
        <?php include("res/navigation.php"); ?>
    </header>

    <section id="gal">
        <h2>Gallery</h2>
        <hr>
        
        <div class="gal-div">
            <a data-fancybox="gallery" href="media/gallery1.jpeg"><img src="media/gallery1.jpeg"></a>
            <a data-fancybox="gallery" href="media/gallery3.jpg"><img src="media/gallery3.jpg" style="height:400px;width:auto;"></a>
            <a data-fancybox="gallery" href="media/gallery2.jpg"><img src="media/gallery2.jpg"></a>
        </div>
        
        <div class="gal-div">
            <a data-fancybox="gallery" href="media/gallery4.jpg"><img src="media/gallery4.jpg"></a>
            <a data-fancybox="gallery" href="media/gallery5.jpg"><img src="media/gallery5.jpg"></a>
            <a data-fancybox="gallery" href="media/gallery6.jpg"><img src="media/gallery6.jpg"></a>
        </div>
    </section>
</body>
</html>