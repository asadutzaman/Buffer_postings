<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <th><?php echo e($row->user_id); ?></th>
    <th><?php echo e($row->group_id); ?></th>
    <th><?php echo e($row->post_id); ?></th>
    <th><?php echo e($row->account_id); ?></th>
    <th><?php echo e($row->account_service); ?></th>
    <th><?php echo e($row->buffer_post_id); ?></th>
    <th><?php echo e($row->post_text); ?></th>
    <th></th>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
<tr>
    <td colspan="4" align="center">
        <?php echo $data->links(); ?>

    </td>
</tr>