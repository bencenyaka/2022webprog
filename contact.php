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
        <nav>
            <ul>
                <a class="leftNav" href="index.php">Nyaka Bence</a>
                <li><a href="project.php">Projects</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a class="active" href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <section id="content">
        <div class="contact-div">
            <h2>Contact</h2>
            <hr style="margin-left:30%;margin-right:30%;">
            <form method="post" action="mailto:nyakabence03@gmail.com">
                <div>
                    <label for="inName">Full name:<span>*</span></label>
                    <input type="text">
                </div>
                <div>
                    <label for="inEmail">Email:<span>*</span></label>
                    <input type="text">
                </div>
                <div>
                    <label for="InPhonenumber">Phone number:</label>
                    <input type="text">
                </div>
                <div>
                    <label for="InMessage">Message:</label>
                    <textarea type="text"></textarea>
                </div>
                <div>
                    <p><sup><span>*</span><span>mandatory</span></sup></p>
                </div>
                <div style="text-align:center;">
                    <button>Küldés</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>