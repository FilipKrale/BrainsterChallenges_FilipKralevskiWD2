

<?php $__env->startSection('title', 'Contact'); ?>

<?php $__env->startSection('header'); ?>
    <?php $__env->startSection('jumbutron'); ?>
        <div class="col-6 text-center text-light">
            <h1 class="fw-bold display-3 pb-3">Contact me</h1>
            <p class="fw-bold h6 text-white-dimm-50">Have questions? I have answers!</p>
        </div>
    <?php $__env->stopSection(); ?>
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-4 offset-4 py-5">
                    <form action="#" method="POST">
                        <div class="mb-3">
                          <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                        </div>
                        <div class="mb-3">
                          <input type="email" class="form-control" id="email" placeholder="Email address" name="email">
                        </div>
                        <div class="mb-3">
                          <input type="tel" class="form-control" id="phone" placeholder="Phone" name="phone">
                        </div>
                        <div class="mb-3">
                          <textarea class="form-control" id="message" placeholder="Message" name="message" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-custom">SEND</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aleksandar\Desktop\Challenge23-Laravel\resources\views/contact.blade.php ENDPATH**/ ?>