<!--      Header Navigation      -->
<nav class="main-nav navbar navbar-dark navbar-expand-lg fixed-top" style="background-color: rgba(0,0,0, 0.5);">
<a class="navbar-brand" href="/index.php">
    <img src="/resources/images/design/logo-white.png" width="auto" height="60" alt="GreenEarth Foundation">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeaderContent" aria-controls="navbarHeaderContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarHeaderContent">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item <?php echo ($activePage == "home") ? "active" : "" ?>"><a class="nav-link text-white" href="/index.php">Home</a></li>
    <li class="nav-item <?php echo ($activePage == "about") ? "active" : "" ?>"><a class="nav-link text-white" href="/about.php">About</a></li>
    <li class="nav-item <?php echo ($activePage == "work") ? "active" : "" ?>"><a class="nav-link text-white" href="/work.php">Our Work</a></li>
    <li class="nav-item <?php echo ($activePage == "gallery") ? "active" : "" ?>"><a class="nav-link text-white" href="/gallery.php">Gallery</a></li>
    <li class="nav-item <?php echo ($activePage == "action") ? "active" : "" ?>"><a class="nav-link text-white" href="/take-action.php">Take Action</a></li>
    <li class="nav-item <?php echo ($activePage == "store") ? "active" : "" ?>"><a class="nav-link text-white" href="/store.php">Store</a></li>
    
    <?php
        session_start();
    
        if (isset($_SESSION['user'])) {
           // logged in
           echo '<li class="nav-item"><a class="nav-link text-white" href="#donate">Donate</a></li>';
           echo '<li class="nav-item"><a class="nav-link text-white" href="/hub/index.php">Go to my account</a></li>';
           echo '<li class="nav-item"><a class="btn btn-outline-secondary mt-1" href="/logout.php">Logout</a></li>';
         } else {
           // not logged in
           echo '<li class="nav-item"><a class="nav-link text-white" href="/account.php">Signup / Signin</a></li>';
           echo '<li class="nav-item"><a class="btn btn-outline-secondary mt-1" href="#donate">Donate</a></li>';
         }
        
    ?>
    </ul>
</div>
</nav>