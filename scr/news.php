<?php
$res = mysql_query("select subj, t, time from geo.forum where d = 1 order by time desc limit 0,5");
$news = mysql_fetch_assoc($res);

  
while ($news)
{
 if (strlen($news['subj'])>20) $news['subj'] = substr($news['subj'],0,20).' ...';
  if ($news['time']>(time()-3600*24)){
  ?>
    <a href="forum.php?d=1&amp;t=<?php echo $news['t'];?>"><B>• <?php echo $news['subj'];?></B></a>
<?php }else { ?>
    <a href="forum.php?d=1&amp;t=<?php echo $news['t'];?>">• <?php echo $news['subj'];?></a>

  <?php
  }
 $news = mysql_fetch_assoc($res);
}
?>

