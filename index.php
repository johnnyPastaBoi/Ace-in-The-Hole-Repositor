<!--Aaron Beals 1/26/2020-->
<html lang="en">

<head>

    <title>Ace in the Hole</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="author" content="Aaron Beals">
    <!--Favicon-->
    <link rel="icon" href="images/vectors/navicon.png">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:700&display=swap" rel="stylesheet">
    <link type="text/less" href="styles/style.less" rel="stylesheet">
    <!--Hamburger menu-->
    <link href="styles/hamburgers-master/dist/hamburgers.css" rel="stylesheet">
    <!--Slick JavaScript image carousel-->
    <link rel="stylesheet" type="text/css" href="styles/slick/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="styles/slick/slick/slick-theme.css"/>
    <!--LESS CDN-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js"></script>

</head>

<body>
<!--Nav include.-->
        <?php include 'includes/nav.php' ?>

<header>

    <div class="slide_show">
        <img src="images/swimmers.jpg">
        <img src="images/bikers_2.jpg">
        <img src="images/runners_2.jpg">
    </div>
    
</header>

<main>

    <!--Example Text-->
    <section class="para">
        <h1>h1 Heading</h1>
        <h2>h2 Heading</h2>
        <h3>h3 Heading</h3>
        <h4>h4 Heading</h4>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore </p>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore </p>


    </section>
    <!--Example List-->
    <section class="list">
        <h2>List Heading</h2>
        <ul>

            <li>1: Lorem ipsum dolor sit amet</li>
            <li>2: Lorem ipsum dolor sit amet</li>
            <li>3: Lorem ipsum dolor sit amet</li>
            <li>4: Lorem ipsum dolor sit amet</li>
            <li>5: Lorem ipsum dolor sit amet</li>

        </ul>

    </section>
    <!--Example Form-->
    <section class="form">


        <form>
            <h2>Form</h2>
            <label for="1">Field Label 1</label>
            <input id="1" type="text" placeholder="Field 1">

            <label for="2">Field Label 2</label>
            <input id="2" type="text" placeholder="Field 2">

            <label for="3">Field Label 3</label>
            <input id="3" type="text" placeholder="Field 3">

            <label for="4">Field Label 4</label>
            <input id="4" type="datetime" placeholder="Field 4">

            <label for="5">Text Area Label </label>
            <textarea id="5" placeholder="Text Area"></textarea>
        </form>

    </section>
    <!--Social Media Feed-->
    <section class="social">

        <a class="twitter-timeline" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw">Tweets by pcccas222</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

    </section>
    <!--Weather Feed. Won't display on mobile-->
    <section class="weather">
        <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-icons="Climacons Animated" data-days="5">PORTLAND WEATHER</a>
    </section>



</main>
<!--Nav include.-->
    <?php include 'includes/footer.php' ?>

<!--jQuery Scripts-->
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<!--Slick image slide show scripts-->
<script type="text/javascript" src="styles/slick/slick/slick.min.js"></script>
<!--jQuery Button/Nav bar scripts-->
<script src="scripts/script.js"></script>
</body>

</html>
