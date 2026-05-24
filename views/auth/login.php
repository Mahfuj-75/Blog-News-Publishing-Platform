<?php include '../../includes/header.php'; ?>

<div class="auth-container">

    <div class="auth-left">

        <div class="overlay"></div>

        <div class="auth-content">

            <h1>Welcome Back</h1>

            <p>
                Read articles, follow authors,
                and explore modern publishing.
            </p>

        </div>

    </div>

    <div class="auth-right">

        <form class="auth-form">

            <h2>Login</h2>

            <div class="input-group">
                <input type="email" placeholder="Enter Email">
            </div>

            <div class="input-group">
                <input type="password" placeholder="Enter Password">
            </div>

            <button type="submit" class="auth-btn">
                Login
            </button>

            <p class="bottom-text">
                Don't have an account?
                <a href="register.php">Register</a>
            </p>

        </form>

    </div>

</div>

<?php include '../../includes/footer.php'; ?>