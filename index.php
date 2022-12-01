<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="res/style.css">
</head>
<body style="background-image: url(media/image-1.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-color: black;">
    <!--
        animation of changing between pages (slide from right to left (blue color))
        underline nav (active, animation)
        index -> home(active, logo), projects, contact, gallery(fancybox), about
        nav items center
        company logo -> nav left side 
        footer -> nav items, copyright, other links(?)
    -->
    <header>
        <?php include("res/navigation.php"); ?>
    </header>

    <section>
        <div class="content">
            <div class="text">
                <h4>Lorem ipsum</h4>
                <h2>Lorem ipsum sit damet<h2>
                <h4>Lorem ipsum sit</h4>
            </div>
        </div>
    </section>

</body>
</html>