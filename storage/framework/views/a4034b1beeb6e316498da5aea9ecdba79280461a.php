

<?php $__env->startSection('header'); ?>
    <?php $__env->startSection('title', 'About'); ?>
    <?php $__env->startSection('image', '/assets/img/about-bg.jpg'); ?>
        <?php $__env->startSection('jumbutron'); ?>
            <div class="col-6 text-center text-light">
                <h1 class="fw-bold display-3 pb-3">About Me</h1>
                <p class="fw-bold h6 text-white-dimm-50">This is what I do.</p>
            </div>
        <?php $__env->stopSection(); ?>
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-4 offset-4 py-5">
                    <p class="pb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam, eos reiciendis voluptatum dolorum asperiores tempore consectetur laudantium nulla minima ducimus incidunt sunt dignissimos iste sit dolores molestiae expedita voluptates quas? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati tenetur culpa odit eligendi fugiat maxime nemo perferendis inventore voluptatum quo reprehenderit itaque officia alias, error voluptatibus sint vel quos? Corporis?</p>
                    <p class="pb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam, eos reiciendis voluptatum dolorum asperiores tempore consectetur laudantium nulla minima ducimus incidunt sunt dignissimos iste sit dolores molestiae expedita voluptates quas? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati tenetur culpa odit eligendi fugiat maxime nemo perferendis inventore voluptatum quo reprehenderit itaque officia alias, error voluptatibus sint vel quos? Corporis?</p>
                    <p class="pb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam, eos reiciendis voluptatum dolorum asperiores tempore consectetur laudantium nulla minima ducimus incidunt sunt dignissimos iste sit dolores molestiae expedita voluptates quas? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati tenetur culpa odit eligendi fugiat maxime nemo perferendis inventore voluptatum quo reprehenderit itaque officia alias, error voluptatibus sint vel quos? Corporis?</p>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aleksandar\Desktop\Challenge23-Laravel\resources\views/about.blade.php ENDPATH**/ ?>