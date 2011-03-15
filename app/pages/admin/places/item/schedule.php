<?
function makeTimeHTML($time){
	ob_start();?>
	<select>
    	<? for($i=1;$i<=12;$i++){?>
        	<option><?=($i<10)?"0$i":$i;?></option>
        <? }?>
    </select>

    <select>
    	<option>00</option>
        <option>15</option>
        <option>30</option>
        <option>45</option>
    </select>
	<select>
    	<option>AM</option>
        <option>PM</option>
    </select>
    <?
	$html = ob_get_contents();
	ob_end_clean();
	return $html;
	}

function makeWeekdayHTML($name, $time_start = "", $time_end = ""){
	$id	= str_replace(array("-"," ") ,"", strtolower($name));
	ob_start();?>
    <label for="<?=$id?>" class="name"><?=$name?>:</label>
    <div class="weekday" id="<?=$id?>">
        <span class="time">
            <label style="display:inline">Start:</label>
            <?=makeTimeHTML($time_start)?>
        </span>
        <span class="time">
            <label style="display:inline">End:</label>
            <?=makeTimeHTML($time_end)?>
        </span>
        <span class="extra">
            <input type="radio" name="extra_<?=$id?>" id="nonstop_<?=$id?>"/> <label for="nonstop_<?=$id?>" style="display:inline">Non-stop</label><br/>
           <input type="radio" name="extra_<?=$id?>" id="closed_<?=$id?>"/>  <label for="closed_<?=$id?>" style="display:inline">Closed</label>
        </span>
    </div>
    <?
	$html = ob_get_contents();
	ob_end_clean();
	return $html;
	}
?>
<style type="text/css">
    
</style>
<script type="text/javascript">
$(function(){
	$("a.advanced").click(function(){
		$(this).parent().parent().slideUp();
		$(this).parent().parent().next().slideDown();

		});
	$("a.simple").click(function(){
		$(this).parent().parent().slideUp();
		$(this).parent().parent().prev().slideDown();
		});
	});
</script>


<fieldset>
	<div id="sch">
		<ul>
			<li>
				<div>
					<?=makeWeekdayHTML("Mon - Fri")?>
					<div class="adv">
						<a href="#" class="button advanced">avansat</a>
					</div>
				</div>

				<div class="hidden">
					<? $weekdays = array("Monday","Tuesday","Thursday","Wensday","Friday","Sataturday","Sunday");?>
					<? for($i=0;$i<5;$i++){?>
						<?=makeWeekdayHTML($weekdays[$i])?>
					<? }?>
					 <div class="adv">
						<a href="#" class="button simple">simplu</a>
					</div>
				</div>
			</li>

			<li>
				<div>
					<?=makeWeekdayHTML("Sat - Sun")?>
					<div class="adv">
						<a href="#" class="button advanced">avansat</a>
					</div>
				</div>

				<div class="hidden">
					<? for($i=5;$i<7;$i++){?>
						<?=makeWeekdayHTML($weekdays[$i])?>
					<? }?>
					 <div class="adv">
						<a href="#" class="button simple">simplu</a>
					</div>
				</div>
			</li>
		</ul>
	</div>

</fieldset>
