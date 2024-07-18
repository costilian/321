<?php $__env->startSection('content_box'); ?>
    <div class="container">
        <div class="py-5">
            <div class="row">
                <div class="col-12 mb-3">
                    <h1><?php echo e($title); ?></h1>
                </div>
            </div>
            <div id="showbox">
                <?php echo $__env->make('frontend.showinitem', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.save_pro', function(e) {
                e.preventDefault();
                var $this = $(this);
                var url = $(this).attr('href');
                var text = $(this).find('.save_pro_text').html().trim();

                $.ajax({
                    type: "GET",
                    url: url,
                    success: function(response) {
                        if (response) {
                            $this.find('.save_pro_text').html('Saved');
                            $this.addClass('btn-success').removeClass('btn-outline-success');
                        } else {
                            $this.find('.save_pro_text').html('Save');
                            $this.addClass('btn-outline-success').removeClass('btn-success');
                        }
                    }
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\r\resources\views/User/savedPro.blade.php ENDPATH**/ ?>