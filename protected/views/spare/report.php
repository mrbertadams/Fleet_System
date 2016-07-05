<?php if ($model !== null):?>
<table border="1">
	<tr>
    	<th width="130px" align="center">
		     <b>Sub System</b>
         </th>
         
         <th width="130px" align="center">
		     <b>Spare Part</b>
         </th>

         <th width="80px" align="center">
		     <b>Status</b>
         </th>
     
 	</tr>
    
    <?php $loop_count=0;?>
	 <?php foreach($model as $item): ?>
	<tr>     
        <td align="center"><?php echo $item['sub_system']; ?></td>
        <td align="center"><?php echo $item['title']; ?></td>
        <?php
		if(intval($item['status'])==1){
			$status_text="<font color='#000099'>Active</font>";
		}else{
			$status_text="<font color='#FF0000'>Inactive</font>";
		}
		?>
        <td align="center"><?php echo $status_text; ?></td>
    </tr>
    <?php $loop_count++;?>
     <?php endforeach; ?>
</table>
<?php endif; ?>
<br />
<b>Total Records</b>
<?php echo $loop_count;?>
     