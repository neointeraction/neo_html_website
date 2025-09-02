<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">neointeraction design</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link <?php if ($page == 'Home') echo 'active'; ?>" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($page == 'About Us') echo 'active'; ?>" href="about-us.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($page == 'Services') echo 'active'; ?>" href="services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($page == 'Projects') echo 'active'; ?>" href="projects.php">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($page == 'Events') echo 'active'; ?>" href="events.php">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($page == 'Blogs') echo 'active'; ?>" href="blogs.php">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($page == 'Contact Us') echo 'active'; ?>" href="contact-us.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
