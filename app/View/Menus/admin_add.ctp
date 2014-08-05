<div class="menus form">
<?php echo $this->Form->create('Menu'); ?>
	<fieldset>
		<legend><?php echo __('Add Menu'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('default');
		echo $this->Form->input('sequence');
		echo $this->Form->input('user_id');
		echo $this->Form->input('status',array('options'=>array('Active'=>'Active','Inactive'=>'Inactive')));
		echo $this->Form->input('slug');
		echo $this->Form->input('parent_type',array('options'=>array(''=>'','page_groups'=>'Pagegroups','pages'=>'Pages','features'=>'Features'),'onchange'=>'fillParent(this.value);'));
		echo $this->Form->input('parent_id');

	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Menus'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

<script type="text/javascript">

function fillParent(val){

  $.ajax({url:"<?php echo $this->webroot ?>menus/populate/"+val,success:function(result){
   var objs = jQuery.parseJSON(result);
   var options = '';
    for(obj in objs){

  	 options += '<option value="'+obj+'">'+objs[obj]+'</option>';
    }

    $("#MenuParentId").html(options);
  }});
}


</script>

