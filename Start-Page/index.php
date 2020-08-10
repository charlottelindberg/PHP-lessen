<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <div class="main-grid">

        <main>
            <h1 class="title">Hi There!</h1>
            <p class="welcome">Welcome to my portfolio.
                <br>
                Please hire me! :)</p>


            <!-- grid layout -->
            <div class="main-content">
                <div class="portfolio">
                    <div class="portfolio-item medium one">my CV</div>
                    <div class="portfolio-item large two">bootstrap</div>
                    <div class="portfolio-item medium three">wordpress</div>
                    <div class="portfolio-item small four">:)</div>
                    <div class="portfolio-item tall five">javascript</div>
                    <div class="portfolio-item wide six">php</div>
                    <div class="portfolio-item wide seven">Hi, my name is...</div>
                    <div class="portfolio-item medium eight">photography</div>
                    <br>
                </div>
            </div>
            <!-- grid layout -->

            <div class="description">
                Are you looking for a fresh-out-of-the-oven front-end developer who's not only crazy motivated, but also
                pretty damn creative? Then today is your lucky day!
                <br>
                <br>
                Check out my various designs in the <span class="eye">assorted tiles</span> to the right. There,
                you'll find examples of snippets of codes, made with different type of mediums.
            </div>
            <button class="btn"> <strong> Contact me now!</strong></button>
            <button class="btn_login"> <strong> Login!</strong></button>
        </main>
    </div>

    <?php
    session_start();
    if (isset($_SESSION['status'])) {
        unset($_SESSION['status']);
    }
    ?>

</body>

</html>