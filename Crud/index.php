<?php
// Include header
require_once "includes/header.php";
?>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Welcome to PHP CRUD Application</h4>
            </div>
            <div class="card-body">
                <p class="lead">This is a simple CRUD application built with PHP and Bootstrap.</p>

                <?php if ($loggedIn): ?>
                    <div class="alert alert-success">
                        <h4>Hello, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h4>
                        <p>You are logged in. You can:</p>
                        <a href="crud/read.php" class="btn btn-info">View Items</a>
                        <a href="crud/create.php" class="btn btn-primary">Add New Item</a>
                    </div>
                <?php else: ?>
                    <div class="alert alert-info">
                        <p>Please login or register to manage items.</p>
                        <a href="auth/login.php" class="btn btn-primary">Login</a>
                        <a href="auth/register.php" class="btn btn-secondary">Register</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php
// Include footer
require_once "includes/footer.php";
?>