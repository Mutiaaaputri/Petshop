<?php
$currentRouteName = Route::currentRouteName();
?>

<nav class="navbar navbar-expand-lg bg-white ">
    <div class="container-md">
        <a class="navbar-brand" href="<?php echo e(route('home')); ?>"><img src="<?php echo e(Vite::asset('resources/image/Logo.png')); ?>"
                width="115" height="30"></a>
        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav h5 ">
                <li class="nav-item">
                   <a class="nav-link text-black" href="<?php echo e(route('product.index')); ?>">Produk List</a>
                    
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                <?php if(auth()->guard()->guest()): ?>
                <?php if(Route::has('login')): ?>
                <li class="nav-item me-1">
                    <a class="nav-link text-white border border-2 rounded py-1" href="<?php echo e(route('login')); ?>"><?php echo e(__('Masuk')); ?></a>
                </li>
                <?php endif; ?>

                <?php if(Route::has('register')): ?>
                <li class="nav-item text-white">
                    <a class="nav-link text-white border border-2 rounded py-1" href="<?php echo e(route('register')); ?>"><?php echo e(__('Daftar')); ?></a>
                </li>
                <?php endif; ?>
                <?php else: ?>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <?php echo e(Auth::user()->name); ?>

                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo e(route('history',[Auth::user()->id])); ?>">
                            <?php echo e(__('History')); ?>

                        </a>
                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                            <?php echo e(__('Logout')); ?>

                        </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\xampp\htdocs\Kuliah\Laravel2\Petshop-web\resources\views/layouts/nav.blade.php ENDPATH**/ ?>