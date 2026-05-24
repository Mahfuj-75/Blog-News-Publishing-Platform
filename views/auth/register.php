<?php include '../../includes/header.php'; ?>

<div class="auth-container">

    <div class="auth-left">

        <div class="overlay"></div>

        <div class="auth-content">

            <h1>Join BlogSphere</h1>

            <p>
                Create content, share knowledge,
                and grow your audience.
            </p>

        </div>

    </div>

    <div class="auth-right">

        <form class="auth-form">

            <h2>Create Account</h2>

            <div class="input-group">
                <input type="text" placeholder="Full Name">
            </div>

            <div class="input-group">
                <input type="text" placeholder="Username">
            </div>

            <div class="input-group">
                <input type="email" placeholder="Email">
            </div>

            <div class="input-group">
                <input type="password" placeholder="Password">
            </div>

            <button type="submit" class="auth-btn">
                Register
            </button>

            <p class="bottom-text">
                Already have an account?
                <a href="login.php">Login</a>
            </p>

        </form>

    </div>

</div>

<?php include '../../includes/footer.php'; ?>