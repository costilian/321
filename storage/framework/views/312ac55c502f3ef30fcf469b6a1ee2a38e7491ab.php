<div class="form-floating mb-3">
    <?php
        if (!is_null(old($name))) {
            $finVal = old($name);
        } else {
            $finVal = $value;
        }
    ?>
    <input class="form-control" type="<?php echo e($type); ?>" name="<?php echo e($name); ?>"
        placeholder="<?php echo e($placeholder); ?>" value="<?php echo e($finVal); ?>" <?php echo e($status); ?> required/>
    <label for="<?php echo e($name); ?>"><?php echo e($label); ?></label>
    <div class="text-danger">
        <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php echo e($message); ?>

        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
</div>
<?php /**PATH C:\OSPanel\domains\r\resources\views/components/log-input.blade.php ENDPATH**/ ?>