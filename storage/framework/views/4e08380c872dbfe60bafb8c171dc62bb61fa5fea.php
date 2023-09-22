

<?php $__env->startSection('header'); ?>
    <?php $__env->startSection('title', 'Home'); ?>
    
    <?php $__env->startSection('jumbutron'); ?>
        <div class="col-6 text-center text-light">
            <h1 class="fw-bold display-3 pb-3">Clean blog</h1>
            <p class="fw-bold h6 text-white-dimm-50">A blog theme by startup bootstrap</p>
        <div class="col-6 text-center text-light">
    <?php $__env->stopSection(); ?>
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div class="row">
        <div class="container">
            <div class="row py-3">
                <div class="col-4 offset-4 py-4 border-bottom">
                    <h3 class="fw-bold"><a href="#" class="social-link">Lorem ipsum</a></h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque eius voluptate perferendis numquam pariatur cum alias consequuntur possimus provident sint. Corrupti eius nobis laboriosam minima ex ullam excepturi possimus aspernatur.</p>
                    <small class="fst-italic">Posted by <a href="#" class="social-link"><span class="fw-bold">John Doe</span></a></small>
                </div>
                <div class="col-4 offset-4 py-4 border-bottom">
                    <h3 class="fw-bold"><a href="#" class="social-link">Lorem ipsum 2</a></h3>
                    <small class="fst-italic">Posted by <a href="#" class="social-link"><span class="fw-bold">John Doe</span></a> in another news</small>
                </div>
                <div class="col-4 offset-4 py-4 border-bottom">
                    <h3 class="fw-bold"><a href="#" class="social-link">Lorem ipsum 3</a></h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque eius voluptate perferendis numquam pariatur cum alias consequuntur possimus provident sint. Corrupti eius nobis laboriosam minima ex ullam excepturi possimus aspernatur. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro facere velit ab deleniti nam maiores, laudantium minus sed sit optio repudiandae beatae hic quam dignissimos, ullam rem necessitatibus consequuntur. Eaque!</p>
                    <small class="fst-italic">Posted by <a href="#" class="social-link"><span class="fw-bold">John Doe</span></a></small>
                </div>
                <div class="col-4 offset-4 py-4 border-bottom">
                    <h3 class="fw-bold"><a href="#" class="social-link">Lorem ipsum 4</a></h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <small class="fst-italic">Posted by <a href="#" class="social-link"><span class="fw-bold">Missy Doe</span></a></small>
                </div>
                <div class="col-4 offset-4 py-3 text-end">
                    <a href="#" class="btn btn-custom">Older posts -></a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aleksandar\Desktop\Challenge23-Laravel\resources\views/home.blade.php ENDPATH**/ ?>