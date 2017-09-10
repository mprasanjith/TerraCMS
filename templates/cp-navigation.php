<!--      Header Navigation      -->
<nav class="admin-nav main-nav navbar navbar-dark navbar-expand-lg fixed-top">
    <a class="navbar-brand" href="index.php">
        <b class="text-white">GreenEarth</b>
        <?php 
            if ($userType == 1) {
                echo "Hub";
            } else if ($userType == 2) {
                echo "Admin";
            }
            
            echo " > $activePage";
        ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeaderContent" aria-controls="navbarHeaderContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarHeaderContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link text-white" href="/index.php">Back to homepage</a></li>
            <li class="nav-item"><a class="btn btn-outline-secondary mt-1" href="/logout.php">Logout</a></li>
        </ul>
    </div>
</nav>
