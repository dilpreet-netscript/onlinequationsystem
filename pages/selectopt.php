<select id="comboA" onchange="getQuantity(this)" class="selectpicker">
<option value="" selected>Quantity</option>
<?php
for($i=0 ;$i<=999;$i++)
{
	?>
	
	<option value="<?php echo $i; ?>"> qty<?php echo $i ?></option>
	<?php
}
	?>
	</select>