<nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark">
    <div class="container">
        <a href="#" class="navbar-brand"><img src="<?php echo URLROOT; ?>/img/logo1.PNG" style="width:38px;border-radius:50%"> Project Ovijog</a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarcollapseCMS">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarcollapseCMS">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="<?php echo URLROOT; ?>" class="nav-link"><i class="fas fa-house-user"></i> Home</a>
                </li>
                <?php if (isset($_SESSION['user_id'])) : ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fas fa-user"></i> My Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fa-solid fa-sim-card"></i> Posts</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Categories</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a href="<?php echo URLROOT; ?>/pages/about" class="nav-link"><i class="fas fa-user"></i> About</a>
                    </li>
                <?php endif; ?>
            </ul>
            <ul class="navbar-nav ms-auto">
                <?php if (isset($_SESSION['user_id'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?php echo $_SESSION['user_name']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout"><i class="fa-solid fa-right-from-bracket"></i></a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a href="<?php echo URLROOT; ?>/users/register" class="nav-link "><i class="fa-solid fa-user-plus"></i> Register</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo URLROOT; ?>/users/login" class="nav-link "><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>