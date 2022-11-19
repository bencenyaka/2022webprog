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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae posuere elit. Nunc pretium, metus sit amet sodales tristique, libero lorem scelerisque elit, in dignissim sem dolor scelerisque lorem. Vivamus fermentum ullamcorper enim varius suscipit. Phasellus consequat leo eget purus elementum scelerisque. Fusce posuere accumsan arcu, sed eleifend augue tristique eu. Aenean efficitur diam non diam rhoncus sollicitudin sit amet sed ipsum. Donec auctor in lorem vel tristique. Phasellus ac erat nulla. Phasellus id libero urna. Etiam vel lectus aliquet, malesuada ex sed, tincidunt ipsum. Sed venenatis nibh eget dignissim accumsan. Donec vel diam ultricies, luctus ligula a, accumsan ligula. Maecenas elementum dictum interdum.
                    <br>
                    Quisque hendrerit arcu sed metus imperdiet bibendum. Mauris et dui mattis, dignissim enim quis, sagittis tellus. Fusce accumsan at purus in viverra. Donec pulvinar mauris sit amet dictum mollis. Praesent nec felis vulputate, malesuada est vel, vehicula eros. Integer in convallis elit. Vestibulum tincidunt placerat tortor ut pretium.
                    <br>
                    Nulla lacinia condimentum augue, et vulputate lorem venenatis eget. Ut ac dapibus quam. Cras eu magna tempor, iaculis dui nec, vulputate magna. Sed a felis sed odio varius euismod. Etiam purus dolor, condimentum non ornare in, malesuada at leo. Integer sed egestas turpis. Vivamus faucibus, magna id hendrerit.
                </p>
            </div>
        </div>
    </section>
</body>
</html>