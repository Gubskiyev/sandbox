
<table cellpadding="0" cellspacing="0" border="0" width="100%">
    <tbody>
      <tr>
        <td valign="top" width="60">
        <a href="index.php"><img src="img/ind.gif" alt="RV" width="84" height="35" border='0'></a>
                </td>
        <td valign="middle" align="left"><nobr>&nbsp;&nbsp;&nbsp;War of Races&nbsp;&nbsp;&nbsp;</nobr>
</td> <td valign="middle" align="center" name="" width="100%">
                         &nbsp;&nbsp;&nbsp; <a href="rules.php">Правила игры</a>
      
      </td> <td valign="middle" align="right" name=""><nobr><?php print date("H:i");?> &nbsp;&nbsp;</nobr><br><a href="on_line.php"><?php
      
      echo mysql_result(mysql_query("SELECT count(*)FROM desertc_geo.uin where on_line >".(time()-300)),0);
      
      ?></a>&nbsp;&nbsp;&nbsp;
      
      </td>
      </tr>
       
  </tbody>  
</table>
   
<table cellpadding="2" cellspacing="1" border="0" width="100%"
 bgcolor="#000000">
      <tbody>
        <tr>
<nobr><td valign="top" width="20%"bgcolor="#f3cd18"rowspan="1"align="center"valign="center"colspan="1">
<?php
$hpto = mysql_query("SELECT  param_2, token_1, time_, btl FROM desertc_geo.uin where uin = $c_uin");
@$hpto = mysql_fetch_array($hpto);



function hp_ ($uin, $hp, $time_='x' )
{              $time = time();
     if ($time!='x') 
     {
     $hp=$hp*6;
     $x = $time_ - $time; if ($x<0){$x=0;}
     $a = ($hp/650)*($x);
     $a = round ($a,0);
     $a = $hp -$a;
        if ($a>$hp){$a=$hp;}
         mysql_query("update desertc_geo.uin set token_1 = $a where uin = $uin");
     //print ",kz ,kz ,kz $hp - $a - $time_ - $time";
     }


  return $a;
}
if ($hpto['param_2']*6!=$hpto['token_1']&&$hpto['btl']==0)
{
hp_ ($c_uin, $hpto['param_2'], $hpto['time_']);
} 
$result24 = mysql_query("SELECT param_2, token_1, time_, money_1 FROM desertc_geo.uin where uin = $c_uin");
@$row24 = mysql_fetch_array($result24);
$res = mysql_query("select count(*) from desertc_geo.mail where t = $c_uin and r = 0");
@$m2 = mysql_result($res,0);
if ($m2>0){$m2='ff';}else{$m2='00';}

?>
<a href="/pers.php" title="$<?php echo $row24['money_1'];?> 
HP [<?php echo $row24['token_1'];?> / <?php  $asd = $row24['param_2']*6; echo $asd;?>]">Персонаж</a> |
<a href="/mail.php"><font color="<?php echo $m2.'0000';?>">Почта</font></a>
|| 
<a href="/map.php">Карта</a> | <a href="/forum.php">Форум</a> 
<?php if (0<@mysql_result(mysql_query("select count(*) from desertc_geo.klans_p where (id = 1 or id =158) and uin = $c_uin"),0)) 
echo'| <a href="/police/police.php"><b>Полиция</b></a> ';?>
| <?php
if ($row['btl']<100)
{
print '<a href="/btl.php">Бои</a>';
}
else
{ 
print '<a href="/b.php?id=b'.$row['btl'].'"><font color="#ff0000"><b>Бой</b></font></a>';
}
$time=time();
mysql_query("update desertc_geo.uin set on_line = $time where uin = $c_uin");
?> </nobr> 
        </td>
                             </tr>
       
  </tbody>  
</table>
  
