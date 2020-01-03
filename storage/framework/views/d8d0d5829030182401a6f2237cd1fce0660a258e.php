<?php $__env->startSection('content'); ?>
   <h3 align="center">Import Excel File</h3>
    <br />
   <?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
     Upload Validation Error<br><br>
     <ul>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li><?php echo e($error); ?></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </ul>
    </div>
   <?php endif; ?>

   <?php if($message = Session::get('success')): ?>
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong><?php echo e($message); ?></strong>
   </div>
   <?php endif; ?>
   <form method="post" enctype="multipart/form-data" action="<?php echo e(url('/import_excel/import')); ?>">
    <?php echo e(csrf_field()); ?>

    <div class="form-group">
     <table class="table">
     <tr>
       <td width="40%" align="right"><label>Select Language</label></td>
        <td width="30">
         <select name="lang" class="form-control" required>
            <option value="ro">Romanian</option>
            <option value="ru">Russian</option>
         </select>
       </td>
      </tr>
      <tr>
       <td width="40%" align="right"><label>Select File Category</label></td>
        <td width="30">
         <select name="category" class="form-control" required>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->title_ro); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </select>
       </td>
      </tr> 
      <tr>  
       <td width="40%" align="right"><label>Select File for Upload</label></td>
       <td width="30">
        <input type="file" name="select_file" />
       </td>
       <td width="30%" align="left">
        <input type="submit" name="upload" class="btn btn-primary" value="Upload">
       </td>
      </tr>
      <tr>
       <td width="40%" align="right"></td>
       <td width="30"><span class="text-muted">.xls, .xslx</span></td>
       <td width="30%" align="left"></td>
      </tr>
     </table>
    </div>
   </form>
   
   <br />
   <div class="panel panel-default">
    <div class="panel-heading">
     <h3 class="panel-title">Customer Data</h3>
    </div>
    <div class="panel-body">
     <div class="table-responsive">
      <table class="table table-bordered table-striped">
       <tr>
        <th>Indicator</th>
        <th>Indicator Name</th>
        <th>Population Group</th>
        
        <?php 
         for($y=2015; $y<2019; ++$y ) {
            echo '<th>' . $y . '</th>';
         }
        ?>

       </tr>
       <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr>
         <td><?php echo e($row->indicator); ?></td>
         <td><?php echo e($row->indicator_name); ?></td>
         <td><?php echo e($row->population_group); ?></td>

         <?php 
         for($y=2015; $y<2019; ++$y ) {
            echo '<td>'. $row->{$y} .'</td>';
         }
        ?>

       </tr>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
     </div>
    </div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('voyager::master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gg/www/NahabaGroup/ansp/resources/views//vendor/voyager/import_excel/browse.blade.php ENDPATH**/ ?>