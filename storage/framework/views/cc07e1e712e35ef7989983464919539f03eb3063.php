

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create new Question</div>
                <div class="card-body">
                    <form method="post" action="/questionnaires">
                        
                        <div class="form-group">
                        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter Title">
    <small id="titleHelp" class="form-text text-muted">Give a Beautiful Tittle </small>
    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <small class="text-danger"><?php echo e($message); ?></small>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>

<div class="form-group">
                        <label for="title">Purpose</label>
        <input type="text"  name="purpose"class="form-control" id="purpose" aria-describedby="purposeHelp" placeholder="Enter Purpose">
    <small id="purposeHelp" class="form-text text-muted">Type Attractive Purpose for Quick Responses </small>
     <?php $__errorArgs = ['purpose'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <small class="text-danger"><?php echo e($message); ?></small>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>
<button class="btn btn-primary" type="submit">Create Questionnaire</button>
<?php echo csrf_field(); ?>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\saik\Desktop\Internship\new-project\resources\views/questionnaire/create.blade.php ENDPATH**/ ?>