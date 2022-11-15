<header class="header">
    <div class="header-nav">
        <a href="index.php"><img src="assets/media/SciBlog_logo.png" alt="logo" class="logo" /></a>
        <div id="lines" onclick="toggleMenu()">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <nav class="main-nav" id="nav-bar">
        <a href="index.php">Homepage</a>
        <a href="transportation.php">Transportation</a>
        <a href="tools.php">Tools</a>
        <a href="health.php">Health</a>
        <a href="references.php">References</a>
    </nav>

</header>
<script>
window.onresize = function() {
    var x = document.getElementById("nav-bar")
    if (window.innerWidth >= 768) x.style.display = "block";
};

function toggleMenu() {
    var x = document.getElementById("nav-bar")
    if (x.style.display == 'flex') {
        x.style.display = 'none';
    } else {
        x.style.display = 'flex';
    }
}
</script>