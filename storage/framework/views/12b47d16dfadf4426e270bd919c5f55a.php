<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Posts - SantriKoding.com</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body style="background-color: #6A6A6A;">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #393939;">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="">
                <img src="asset/logo.png" alt="" width="50" height="50">
            </a>
            <!-- Navbar Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar Items -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- Logout -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('login')); ?>">Logout</a>
                    </li>
                    <!-- Profil -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('profil')); ?>">Profil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4"></h3>
                    <h5 class="text-center"><a></a></h5>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded" style="background-color: #393939;">
                    <div class="card-body" style="color: black;"> <!-- Mengubah warna teks menjadi hitam -->
                        <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                        <table class="table table-bordered text-black">
                            <thead>
                                <tr>
                                    <th scope="col">GAMBAR</th>
                                    <th scope="col">JUDUL</th>
                                    <th scope="col">CONTENT</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="text-center">
                                        <img src="<?php echo e(asset('/storage/posts/'.$post->image)); ?>" class="rounded" style="width: 150px">
                                    </td>
                                    <td><?php echo e($post->title); ?></td>
                                    <td><?php echo $post->content; ?></td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="<?php echo e(route('posts.destroy', $post->id)); ?>" method="POST">
                                            <a href="<?php echo e(route('posts.show', $post->id)); ?>" class="btn btn-sm btn-dark">SHOW</a>
                                            <a href="<?php echo e(route('posts.edit', $post->id)); ?>" class="btn btn-sm btn-primary">EDIT</a>
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="4">
                                        <div class="alert alert-danger">
                                            Data Post belum Tersedia.
                                        </div>
                                    </td>
                                </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                        <?php echo e($posts->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        <?php if(session()->has('success')): ?>

        toastr.success('<?php echo e(session('
            success ')); ?>', 'BERHASIL!');

        <?php elseif(session()->has('error')): ?>

        toastr.error('<?php echo e(session('
            error ')); ?>', 'GAGAL!');

        <?php endif; ?>
    </script>

</body>

</html><?php /**PATH C:\Xampp\htdocs\galeri\resources\views/posts/index.blade.php ENDPATH**/ ?>