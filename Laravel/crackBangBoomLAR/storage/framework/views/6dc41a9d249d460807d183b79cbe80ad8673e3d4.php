<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

  </head>
  <body>
    <div id="desktop-container">
      <?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>

    <br>

    <div>
      <?php echo $__env->yieldContent('content'); ?>
    </div>

    <br>

    <div class="container-fluid">
      <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>

  </body>

</html>
