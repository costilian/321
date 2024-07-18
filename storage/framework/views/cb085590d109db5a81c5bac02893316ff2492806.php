<?php $__env->startSection('content_box'); ?>
    <div class="container">
        <div class="py-5">
            <div class="row">
                <div class="col-12 mb-3">
                    <h1><?php echo e($title); ?></h1>
                </div>
            </div>
            <form id="filter" class="row" enctype="multipart/form-data">
                <div class="col-12 mb-3">
                    <div class="input-group">
                        <div class="input-group-text">Поиск</div>
                        <input class="form-control fltr" name="search" type="text" placeholder="Поиск по названию"
                            value="<?php echo e($SecStr ?? ''); ?>">
                        <button class="btn btn-success" type="submit"><i class="fa fa-search" aria-hidden="true"></i>
                            Поиск</button>
                    </div>
                </div>
                <div class="col-3 mb-3">
                    <div class="input-group">
                        <div class="input-group-text">Категория</div>
                        <select class="form-select fltr" name="category">
                            <option value="*">Все</option>
                            <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(!empty($cate_fltr)): ?>
                                    <?php if($cate_fltr == $item->slug_name): ?>
                                        <option selected value="<?php echo e($item->slug_name); ?>"><?php echo e($item->name); ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo e($item->slug_name); ?>"><?php echo e($item->name); ?></option>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <option value="<?php echo e($item->slug_name); ?>"><?php echo e($item->name); ?></option>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="col-3 mb-3">
                    <div class="input-group">
                        <div class="input-group-text">Город</div>
                        <select class="form-select fltr" name="city">
                            <option value="*">Все</option>
                            <?php $__currentLoopData = $city; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(!empty($city_fltr)): ?>
                                    <?php if($city_fltr == $item->slug_city): ?>
                                        <option selected value="<?php echo e($item->slug_city); ?>"><?php echo e($item->city); ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo e($item->slug_city); ?>"><?php echo e($item->city); ?></option>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <option value="<?php echo e($item->slug_city); ?>"><?php echo e($item->city); ?></option>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="col-1 mb-3">
                    <div class="input-group">
                       
                        <select class="form-select fltr" name="purpose">
                            <?php if(!empty($purpose_fltr)): ?>
                                <option <?php echo e($purpose_fltr == '' ? 'selected' : ''); ?> value="*">...</option>
                                <option <?php echo e($purpose_fltr == 'Продажа' ? 'selected' : ''); ?> value="Продажа">Продажа</option>
                                <option <?php echo e($purpose_fltr == 'Аренда' ? 'selected' : ''); ?> value="Аренда">Аренда</option>
                                <option <?php echo e($purpose_fltr == 'Сожительство' ? 'selected' : ''); ?> value="Сожительство">Сожительство</option>
                            <?php else: ?>
                                <option value="*">Все</option>
                                <option value="Продажа">Продажа</option>
                                <option value="Аренда">Аренда</option>
                                <option value="Сожительство">Сожительство</option>
                            <?php endif; ?>
                        </select>
                    </div>
                </div>
                <div class="col-3 mb-3">
                    <div class="input-group">
                        <div class="input-group-text">Сортировать по</div>
                        <select class="form-select fltr" name="sort">
                            <option value="latest">Новее</option>
                            <option value="oldest">Старее</option>
                            <option value="phtl">Цене от Большей к Низкой</option>
                            <option value="plth">Цене от Низкой к Большой</option>
                            <option value="ahtl">Площади от Большей до Низкой</option>
                            <option value="alth">Площади от Низкой до Большей</option>
                        </select>
                    </div>
                </div>
                <div class="col-2 mb-2">
                    <button class="btn btn-primary w-100" type="submit"><i class="fas fa-filter"></i> Фильтры</button>
                </div>
            </form>
            <div id="showbox">
                <?php echo $__env->make('frontend.showinitem', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script>
        $(document).ready(function() {
            // console.log('Hello');
            $(document).on('submit', '#filter', function(e) {
                e.preventDefault();
                var formdata = $('#filter').serializeArray();
                $.ajax({
                    type: "GET",
                    url: "<?php echo e(route('ajaxFilter')); ?>",
                    data: formdata,
                    dataType: "HTML",
                    success: function(response) {
                        $('#showbox').html(response);
                    }
                });
                // console.log(formdata);
            });
            $(document).on('change keyup', '#filter .fltr', function(e) {
                e.preventDefault();
                var formdata = $('#filter').serializeArray();
                $.ajax({
                    type: "GET",
                    url: "<?php echo e(route('ajaxFilter')); ?>",
                    data: formdata,
                    dataType: "HTML",
                    success: function(response) {
                        $('#showbox').html(response);
                    }
                });
            });
            $(document).on('click', '#showbox .page-link', function(e) {
                e.preventDefault();
                var pagelink = $(this).attr('href');
                var formdata = $('#filter').serializeArray();

                $.ajax({
                    type: "GET",
                    url: pagelink,
                    data: formdata,
                    dataType: "HTML",
                    success: function(response) {
                        $('#showbox').html(response);
                    }
                });
            });
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\r\resources\views/frontend/show.blade.php ENDPATH**/ ?>