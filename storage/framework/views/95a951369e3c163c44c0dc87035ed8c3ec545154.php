<!DOCTYPE html>
<html>
<head>
    <title>Page d'accueil admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/admin.css')); ?>">
</head>
<body>
<?php echo $__env->make('admin.layout.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="page-content">
    <?php if(Session::has('message')): ?>
        <div class="alert alert-info">
            <p><?php echo e(Session::get('message')); ?></p>
        </div>
    <?php endif; ?>

    <div class="row">
        <?php echo $__env->make('admin.layout.includes.sidenav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="col-md-10 display-area">
            <div class="row text-center">
                <div class="col-md-10 col-md-offset-1">
                    <div class="content-box-large">
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
            </div>
        </div><!--/Display area after sidenav-->
    </div>

</div><!--/Page Content-->

<script src="https://code.jquery.com/jquery.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $(".submenu > a").click(function (e) {
            e.preventDefault();
            var $li = $(this).parent("li");
            var $ul = $(this).next("ul");

            if ($li.hasClass("open")) {
                $ul.slideUp(350);
                $li.removeClass("open");
            } else {
                $(".nav > li > ul").slideUp(350);
                $(".nav > li").removeClass("open");
                $ul.slideDown(350);
                $li.addClass("open");
            }
        });
    });
</script>

</body>
</html>