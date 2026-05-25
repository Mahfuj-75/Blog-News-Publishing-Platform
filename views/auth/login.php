<?php include '../../includes/header.php'; ?>
<?php include '../../includes/auth_navbar.php'; ?>
<div class="auth-container">

    <div class="auth-left">

        <div class="auth-content">

            <h1>
                Welcome Back
            </h1>

            <p>
                Login and continue your publishing journey.
            </p>

        </div>

    </div>

    <div class="auth-right">

        <form class="auth-form"
action="../../controllers/AuthController.php"
method="POST">

    <h2>Login</h2>

    <div class="input-group">

        <input type="email"
        name="email"
        placeholder="Enter Email"
        required>

    </div>

    <div class="input-group">

        <input type="password"
        name="password"
        placeholder="Enter Password"
        required>

    </div>

    <button type="submit"
    name="login_btn"
    class="auth-btn">

        Login

    </button>

    <p class="bottom-text">

        Don't have an account?

        <a href="register.php">
            Register
        </a>

    </p>

</form>

    </div>

</div>

<?php include '../../includes/footer.php'; ?>