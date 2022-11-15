<head>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

        <header class="header">
                <div class="header-nav">
                        <a href="index.php"><img src="assets/media/SciBlog_logo.png" alt="logo" class="logo"/></a>
                        <div id="lines" onclick="toggleMenu()">
                            <div class="line"></div>
                            <div class="line"></div>
                            <div class="line"></div>
                        </div>
                </div>
                        <nav class="main-nav" id="nav-bar" style="display: block !important;">
                            <a href="index.php">Homepage</a>
                            <a href="transportation.html">Transportation</a>
                            <a href="tools.html">Tools</a>
                            <a href="health.html">Health & Medicine</a>
                            <a href="references.html">References</a>
                        </nav>
                
            </header>
            <script>
                
                    window.onresize = function() {
                        var x = document.getElementById("nav-bar")
                        if(window.innerWidth >= 768) x.style.display = "block";
                    };
                    function toggleMenu() {
                        var x = document.getElementById("nav-bar")
                        if(x.style.display == 'block') {
                            x.style.display = 'none';
                        }
                        else{
                                x.style.display = 'block';
                        }
                    }
                

            </script>
    </body>
</html>