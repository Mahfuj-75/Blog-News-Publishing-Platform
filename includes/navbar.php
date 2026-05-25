<?php session_start(); ?>

<nav class="navbar">

    <div class="logo">
        <a href="index.php">
            Blog<span>Sphere</span>
        </a>
    </div>

    <ul class="nav-links">

        <li><a href="" class="active">Home</a></li>
        <li><a href="">Articles</a></li>
        <li><a href="">Categories</a></li>
        <li><a href="">Authors</a></li>
        <li><a href="">About Us</a></li>

    </ul>

    <div class="nav-buttons">

<?php if(isset($_SESSION['user_id'])){ ?>

    <span>

        Hello,
        <?php echo $_SESSION['user_name']; ?>

    </span>

    <a href="logout.php"
    class="register-btn">

        Logout

    </a>

<?php }else{ ?>

    <a href="views/auth/login.php"
    class="login-btn">

        Login

    </a>

    <a href="views/auth/register.php"
    class="register-btn">

        Register

    </a>

<?php } ?>

</div>

</nav>