<!--      Header Navigation      -->
<nav class="main-nav navbar navbar-dark navbar-expand-lg fixed-top" style="background-color: rgba(0,0,0, 0.5);">
<a class="navbar-brand" href="index.html">
    <img src="images/design/logo-white.png" width="auto" height="60" alt="GreenEarth Foundation">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeaderContent" aria-controls="navbarHeaderContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarHeaderContent">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item <?php echo ($activePage == "home") ? "active" : "" ?>"><a class="nav-link text-white" href="index.php">Home</a></li>
    <li class="nav-item <?php echo ($activePage == "about") ? "active" : "" ?>"><a class="nav-link text-white" href="about.php">About</a></li>
    <li class="nav-item <?php echo ($activePage == "work") ? "active" : "" ?>"><a class="nav-link text-white" href="work.php">Our Work</a></li>
    <li class="nav-item <?php echo ($activePage == "gallery") ? "active" : "" ?>"><a class="nav-link text-white" href="gallery.php">Gallery</a></li>
    <li class="nav-item <?php echo ($activePage == "action") ? "active" : "" ?>"><a class="nav-link text-white" href="take-action.php">Take Action</a></li>
    <li class="nav-item <?php echo ($activePage == "store") ? "active" : "" ?>"><a class="nav-link text-white" href="store.php">Store</a></li>
    <li class="nav-item <?php echo ($activePage == "account") ? "active" : "" ?>"><a class="nav-link text-white" href="account.php">Account</a></li>
    <li class="nav-item"><a class="btn btn-outline-secondary mt-1" href="#donate">Donate</a></li>
    </ul>
</div>
</nav>