<!DOCTYPE html>
<html lang="en">

<head>
    <title>SciBlog | Home page</title>
    <meta name="viewport" content="width=device-width, intitial-scale=1.0" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div class="container">
        <?php include 'header.php'; ?>
        <main>
            <div class="container-main">
                <h1 class="main-heading">History-Changing Inventions & Discoveries</h1>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/bNUfZ3_VkuE"
                    title="YouTube video player" style="border:none"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <hr />
                <div>
                    <h2 class="main-heading">Transportation</h2>
                    <div class="inv-titles">
                        <div class="inv-titles-1">
                            <div class="img img-main">
                                <img alt="Carriage picture" src="./assets/media/carriage_mobile.jpg" class="carriage" />
                            </div>
                            <h3 class="inv-nav nav-h3">
                                <a href="./transportation.php#wheel">Transportation in early ages: The inventions of
                                    Wheels</a>
                            </h3>
                        </div>
                        <div class="inv-titles-2">
                            <div>
                                <div class="img">
                                    <img src="./assets/media/automobile_mobile.jpg" alt="Automobile picture"
                                        class="automobile" />
                                </div>
                                <h3 class="inv-nav">
                                    <a href="./transportation.php#automobile">From Wagon to automobile</a>
                                </h3>
                            </div>
                            <div>
                                <div class="img">
                                    <img src="./assets/media/airplane_mobile.jpg" alt="Airplane picture"
                                        class="airplane" />
                                </div>
                                <h3 class="inv-nav">
                                    <a href="./transportation.php#airplane">The Invention of the Airplane: Flying
                                        alongside with birds!</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                <div>
                    <h2 class="main-heading">Useful Tools</h2>
                    <div class="inv-titles">
                        <div class="inv-titles-3 mid-main">
                            <div class="img">
                                <img src="assets/media/compass_tablet.jpg" alt="Compass image" class="compass" />
                            </div>
                            <h3 class="inv-nav">
                                <a href="tools.php#compass">The Invention of the Compass: No More Blind Travel!</a>
                            </h3>
                        </div>
                        <div class="inv-titles-3">
                            <div>
                                <div class="img">
                                    <video autoplay loop muted>
                                        <source src="assets/media/bulbvideo.mp4" type="video/mp4" />
                                        <source src="assets/media/bulbvideo.webm" type="video/webm" />
                                        Unfotunatly, an error is preventing video display
                                    </video>
                                </div>
                                <h3 class="inv-nav">
                                    <a href="tools.php#light-bulb">The End of the Candle and Lantern Era: The Invention
                                        of the Incadescent Lightbulb</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                <div>
                    <h2 class="main-heading">Health & Medicine</h2>
                    <div class="inv-titles main-main">
                        <div class="inv-titles-1 ">
                            <div class="img">
                                <img src="assets/media/health_mobile.jpg" alt="Health word" class="health" />
                            </div>
                            <h3 class="inv-nav nav-h3">
                                <a href="health.php#health-definition">Everyone Knows Health, But How can it be
                                    Defined?</a>
                            </h3>
                        </div>
                        <div class="inv-titles-2">
                            <div>
                                <div class="img">
                                    <img src="assets/media/germs_mobile.jpg" alt="Germs photo" class="germs" />
                                </div>
                                <h3 class="inv-nav"><a href="health.php#germs-theory">Why we get sick?</a></h3>
                            </div>
                            <div>
                                <div class="img">
                                    <img src="assets/media/health_practices_mobile.jpg" alt="Hygiene practices photo"
                                        class="health-prac" />
                                </div>
                                <h3 class="inv-nav"><a href="health.php#Hygiene">How Hygiene practices saved women
                                        lives in the 19th century</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="writer">
                    <hr />
                    <h2 class="founder">Founders of SciBlog</h2>
                    <div class="profile">
                        <img src="assets/media/omar_photo_mobile.jpg" alt="Omar's face picture"
                            class="photos omar-img" />
                        <div>
                            <h4>Omar Shaikh Al Zoor</h4>
                            <p>
                                A second year Computing and Information Technology student at RIT University in Dubai.
                            </p>
                        </div>
                    </div>
                    <div class="profile">
                        <img src="assets/media/Abdelrahman_photo.jpg" alt="AbdelRahman Photo" class="photos" />
                        <div>
                            <h4>Abdel Rahman Al Qali</h4>
                            <p>
                                First-year Computing and Information Technology student at RIT University-Dubai.
                            </p>
                        </div>
                    </div>
                    <div class="profile">
                        <img src="assets/media/bilal_photo.jpeg" alt="Bilal's face picture" class="photos" />
                        <div>
                            <h4>Bilal Janealam</h4>
                            <p>
                                I was graduated from Pristine private school in the UAE, and I am currently a RIT
                                student. My hobbies are playing football and video games.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </main>
        <?php include('footer.php'); ?>
    </div>
</body>

</html>