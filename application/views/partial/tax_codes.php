<?php
$i = 0;

foreach($tax_codes as $tax_code => $tax_code_data)
{
	$tax_code_id = $tax_code_data['tax_code_id'];
	$tax_code = $tax_code_data['tax_code'];
	$tax_code_name = $tax_code_data['tax_code_name'];
	$city = $tax_code_data['city'];
	$state = $tax_code_data['state'];
	++$i;
?>
	<div class="form-group form-group-sm" style="<?php echo $tax_code_data['deleted'] ? 'display:none;' : 'display:block;' ?>">
		<?php echo form_label($this->lang->line('taxes_tax_code') . ' ' . $i, 'tax_code_' . $i, array('class'=>'control-label col-xs-2')); ?>
		<div class='col-xs-2'>
			<?php $form_data = array(
					'name'=>'tax_code_' . $i,
					'id'=>'tax_code_' . $i,
					'class'=>'valid_chars text-uppercase form-control input-sm required',
					'placeholder'=>$this->lang->line('taxes_code'),
					'value'=>$tax_code
				);
				echo form_input($form_data);
			?>
		</div>
		<div class='col-xs-2'>
			<?php $form_data = array(
				'name'=>'tax_code_name_' . $i,
				'id'=>'tax_code_name_' . $i,
				'class'=>'valid_chars form-control input-sm required',
				'placeholder'=>$this->lang->line('taxes_name'),
				'value'=>$tax_code_name
			);
			echo form_input($form_data);
			?>
		</div>
		<div class='col-xs-2'>
			<?php $form_data = array(
				'name'=>'city_' . $i,
				'id'=>'city_' . $i,
				'class'=>'valid_chars form-control input-sm',
				'placeholder'=>$this->lang->line('taxes_city'),
				'value'=>$city
			);
			echo form_input($form_data);
			?>
		</div>
		<div class='col-xs-2'>
			<?php $form_data = array(
				'name'=>'state_' . $i,
				'id'=>'state_' . $i,
				'class'=>'valid_chars form-control input-sm',
				'placeholder'=>$this->lang->line('taxes_state'),
				'value'=>$state
			);
			echo form_input($form_data);
			?>
		</div>

		<span class="add_tax_code glyphicon glyphicon-plus" style="padding-top: 0.5em;"></span>
		<span>&nbsp;&nbsp;</span>
		<span class="remove_tax_code glyphicon glyphicon-minus" style="padding-top: 0.5em;"></span>
		<?php echo form_hidden('tax_code_id_' . $i, $tax_code_id); ?>
	</div>
<?php
}
if ($i == 0)
{
?>
	<div class="form-group form-group-sm" style="display:block;">
		<?php echo form_label($this->lang->line('taxes_tax_code') . ' 1', 'tax_code_1', array('class'=>'control-label col-xs-2')); ?>
		<div class='col-xs-2'>
			<?php $form_data = array(
				'name'=>'tax_code_1',
				'id'=>'tax_code_1',
				'class'=>'valid_chars text-uppercase form-control input-sm required',
				'placeholder'=>$this->lang->line('taxes_code'),
				'value'=>''
			);
			echo form_input($form_data);
			?>
		</div>
		<div class='col-xs-2'>
			<?php $form_data = array(
				'name'=>'tax_code_name_1',
				'id'=>'tax_code_name_1',
				'class'=>'valid_chars form-control input-sm required',
				'placeholder'=>$this->lang->line('taxes_name'),
				'value'=>''
			);
			echo form_input($form_data);
			?>
		</div>
		<div class='col-xs-2'>
			<?php $form_data = array(
				'name'=>'city_1',
				'id'=>'city_1',
				'class'=>'valid_chars form-control input-sm',
				'placeholder'=>$this->lang->line('taxes_city'),
				'value'=>''
			);
			echo form_input($form_data);
			?>
		</div>
		<div class='col-xs-2'>
			<?php $form_data = array(
				'name'=>'state_1',
				'id'=>'state_1',
				'class'=>'valid_chars form-control input-sm',
				'placeholder'=>$this->lang->line('taxes_state'),
				'value'=>''
			);
			echo form_input($form_data);
			?>
		</div>

		<span class="add_tax_code glyphicon glyphicon-plus" style="padding-top: 0.5em;"></span>
		<span>&nbsp;&nbsp;</span>
		<span class="remove_tax_code glyphicon glyphicon-minus" style="padding-top: 0.5em;"></span>
		<?php echo form_hidden('tax_code_id_1', -1); ?>
	</div>
<?php
}
?>
