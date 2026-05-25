<?php include '../../includes/header.php'; ?>
<?php include '../../includes/auth_navbar.php'; ?>
<div class="auth-container">

    <div class="auth-left">

        <div class="auth-content">

            <h1>
                Join BlogSphere
            </h1>

            <p>
                Create your account and explore
                modern digital publishing.
            </p>

        </div>

    </div>

    <div class="auth-right">

        <form class="auth-form"
        action="../../controllers/AuthController.php"
        method="POST">

            <h2>Create Account</h2>

            <div class="input-group">

                <input type="text"
                name="name"
                placeholder="Full Name"
                required>

            </div>

            <div class="input-group">

                <input type="text"
                name="username"
                placeholder="Username"
                required>

            </div>

            <div class="input-group">

                <input type="email"
                name="email"
                placeholder="Email"
                required>

            </div>

           <div class="input-group password-group">

    <input type="password"
    name="password"
    id="registerPassword"
    placeholder="Password"
    required>

    <i class="fa-solid fa-eye toggle-password"
    id="registerEye"></i>

</div>

            <button type="submit"
            name="register_btn"
            class="auth-btn">

                Register

            </button>

            <p class="bottom-text">

                Already have an account?

                <a href="login.php">
                    Login
                </a>

            </p>

        </form>

    </div>

</div>

<?php include '../../includes/footer.php'; ?>