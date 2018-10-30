<?php
function f_d($var)
{
	if ($var==0) return "&nbsp;"; else
	return sprintf("%22.2f",$var);
}?>
<html>
<head>
<title>Полезный отпуск</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
<div align=right>Форма 46-ЭС</div>
<center><b>Полезный отпуск<br/><?php echo $org_info->org_name." за ".$period->row()->name;?></b></center>
<table border = 1px width=100%>

<tr>
<td rowspan=2 align=left>
<b>Наименование</b>
</td>
<td colspan=2 align=center>
<b>Полезный отпуск</b>
</td>
<td rowspan=2 align=right>
<b>Ср. Тариф</b>
</td>
</tr>

<tr>
<td align=right>
<b>кВт/ч</b>
</td>
<td align=right>
<b>тенге</b>
</td>
</tr>

<?php
$last_group=-1;$last_group_name="";$sum_kvt=0;$sum_tenge=0;$_sum_kvt=0;$_sum_tenge=0;
$ot100do750=0; $ot100do750_tenge=0; $tar1=0; $t1=0;
$ot10do100=0; $ot10do100_tenge=0; $tar2=0; $t2=0;
$do10=0; $do10_tenge=0; $tar3=0; $t3=0;
$naselenie=0; $naselenie_tenge=0; $tar_nas=0; 
$hoz=0; $hoz_tenge=0; $tar_hoz=0; 
 foreach($otpusk->result() as $o):?>
<?php 
if (($o->firm_subgroup_id!=$last_group)&&($last_group==-1))
{
	echo "<tr><td colspan=4 ><b>{$o->firm_subgroup_name}</b></td></tr>";
	$last_group=$o->firm_subgroup_id;
	$last_group_name=$o->firm_subgroup_name;
}
if (($o->firm_subgroup_id!=$last_group)&&($last_group!=-1))
{
	echo "<tr ><td align=left><b>Итого {$last_group_name}</b></td><td align=right><b>{$sum_kvt}</b></td><td align=right><b>{$sum_tenge}</b></td><td align=right><b>".
	f_d($sum_tenge/$sum_kvt)."</b></td></tr>";
	if ($last_group==4){$naselenie+=$sum_kvt; $naselenie_tenge+=$sum_tenge; $tar_nas+=f_d($sum_tenge/$sum_kvt);}
	if ($last_group==6){$hoz+=$sum_kvt; $hoz_tenge+=$sum_tenge; $tar_hoz+=f_d($sum_tenge/$sum_kvt);}
	$sum_kvt=0;$sum_tenge=0;
	echo "<tr ><td colspan=4><b>{$o->firm_subgroup_name}</b></td>  </tr>";

	$last_group=$o->firm_subgroup_id;
	$last_group_name=$o->firm_subgroup_name;
}
$last_group=$o->firm_subgroup_id;
$sum_tenge+=$o->sum_tenge;
$sum_kvt+=$o->sum_kvt;
$_sum_tenge+=$o->sum_tenge;
$_sum_kvt+=$o->sum_kvt;
?>
<tr>
<td align=left>
<?php echo $o->firm_power_group_name;  ?>
</td>
<td align=right>
<?php echo $o->sum_kvt; if ($o->firm_power_group_id==2){$ot100do750+=$o->sum_kvt;} elseif ($o->firm_power_group_id==3){$ot10do100+=$o->sum_kvt;} elseif ($o->firm_power_group_id==4){$do10+=$o->sum_kvt;} ?>
</td>
<td align=right>
<?php echo f_d($o->sum_tenge); if ($o->firm_power_group_id==2){$ot100do750_tenge+=f_d($o->sum_tenge);} elseif ($o->firm_power_group_id==3){$ot10do100_tenge+=f_d($o->sum_tenge);} elseif ($o->firm_power_group_id==4){$do10_tenge+=f_d($o->sum_tenge);}?>
</td>
<td align=right>
<?php echo f_d(($o->sum_kvt==0?"0":$o->sum_tenge/$o->sum_kvt)); if ($o->firm_power_group_id==2){$tar1+=f_d(($o->sum_kvt==0?"0":$o->sum_tenge/$o->sum_kvt)); $t1+=1;} elseif ($o->firm_power_group_id==3){$tar2+=f_d(($o->sum_kvt==0?"0":$o->sum_tenge/$o->sum_kvt)); $t2+=1;} elseif ($o->firm_power_group_id==4){$tar3+=f_d(($o->sum_kvt==0?"0":$o->sum_tenge/$o->sum_kvt)); $t3+=1;} ?>
</td>
<td>
</td>
</tr>
<?php endforeach;
if ($last_group==4){$naselenie+=$sum_kvt; $naselenie_tenge+=$sum_tenge; $tar_nas+=f_d($sum_tenge/$sum_kvt);}
	if ($last_group==6){$hoz+=$sum_kvt; $hoz_tenge+=$sum_tenge; $tar_hoz+=f_d($sum_tenge/$sum_kvt);}
echo "<tr ><td align=left><b>Итого {$last_group_name}</b></td><td align=right><b>{$sum_kvt}</b>
</td><td align=right><b>{$sum_tenge}</b></td><td align=right><b>".
	f_d($sum_tenge/$sum_kvt)."</b></td></tr>";
?>

<tr>
<td><b>Всего от 100 до 750 кВа</b></td><td align=right><b><?php echo f_d($ot100do750);?></b></td>
<td align=right><b><?php echo f_d($ot100do750_tenge);?></b></td>
<td align=right><b><?php echo f_d($tar1/$t1);?></b></td>
</tr>
<tr>
<td><b>Всего от 10 до 100 кВа</b></td><td align=right><b><?php echo f_d($ot10do100);?></b></td>
<td align=right><b><?php echo f_d($ot10do100_tenge);?></b></td>
<td align=right><b><?php echo f_d($tar2/$t2);?></b></td>
</tr>
<tr>
<td><b>Всего до 10 кВа</b></td><td align=right><b><?php echo f_d($do10);?></b></td>
<td align=right><b><?php echo f_d($do10_tenge);?></b></td>
<td align=right><b><?php echo f_d($tar3/$t3);?></b></td>
</tr>
<tr>
<td><b>Всего население</b></td><td align=right><b><?php echo f_d($naselenie);?></b></td>
<td align=right><b><?php echo f_d($naselenie_tenge);?></b></td>
<td align=right><b><?php echo f_d($tar_nas);?></b></td>
</tr>
<tr>
<td><b>Всего хознужды</b></td><td align=right><b><?php echo f_d($hoz);?></b></td>
<td align=right><b><?php echo f_d($hoz_tenge);?></b></td>
<td align=right><b><?php echo f_d($tar_hoz);?></b></td>
</tr>
<tr>
<td><b>Всего</b></td><td align=right><b><?php echo f_d($_sum_kvt);?></b></td><td align=right>
<b><?php echo f_d($_sum_tenge);?></b></td><td align=right><b><?php echo f_d($_sum_tenge/$_sum_kvt);?></b></td>
</tr>
</table>
<br><br>
<table align=center width=70%>

<tr align=center>
<td>Начальник Щучинского сельского участка</td>
<td><?php echo $org_info->nachalnik_otdela_sbyta;?></td>
</tr>
</table>
</body>
</html>
