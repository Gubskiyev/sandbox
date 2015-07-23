<HTML>
    <HEAD>
        <TITLE>Страница персонажа</TITLE>
        <META http-equiv="Content-Type" content="text/html; charset=utf-8">
        <LINK href="css/main.css" type="text/css" rel="stylesheet">
    </HEAD>
<BODY>
<?php

        include ("scr/header.php");
?>
   <DIV class=menu_left>
      <P>+ Сервисы</P>
      <A href="pers_items.php">• Рюкзак</A>
      <A href="pers_resou.php">• Ресурсы</A>
      <A href="shop.php">• Магазин</A> 
      <A href="market.php"><b>• Рынок</b></A>
      <A href="workshop.php">• Мастерска¤</A>
      <A />
      <A href="pers_money_t.php">Х Перевод денег</A> 
      <A href="mail.php">Х Личная почта</A>
      <A />
      <A href="pers_options.php">Х Ќастройки персонажа</A> 
      <A href="pers_param.php">Х ”правление параметрами</A> 
      <A href="search.php">Х Ќайти игрока</A> 
      <A href="pers_refer.php">Х –ефер</A>
      <A />
      <A href="pers_klans.php">Х  ланы</A>

      <A href="pers_realty.php">Х <b>Ќедвижимость</b></A>
      <A href="pers_friends.php">Х —писок друзей</A> 
      <A href="pers_enemys.php">Х —писок врагов</A> 
      <P>+ ѕротоколы:</P>
      <A href="log_crimes.php?uin=<?php echo $row['uin']; ?>">Х ѕравонарушений</A> 
      <A href="log_btl.php?uin=<?php echo $row['uin']; ?>">Х ѕроведенных боев</A> 
      <A href="log_m.php?uin=<?php echo $row['uin']; ?>">Х ѕередачи денег и предметов</A>
      <A />
      <A href="logout.php">Х <STRONG>«авершение игровой сессии</STRONG></A><br>
      <P>+ —вежие новости</P>
<?php
        //include ("scr/news.php");
?>
   </DIV><!-- Left Menu End -->
<!-- Central Block Start -->
   <DIV class=central_block>
      <DIV class=user>
         <DIV class=count><B>$</B><?php echo number_format($row['money_1'], 0, '.', '`'); ?>

         </DIV>
          <a href="info.php?uin=">Nick</a>
      </DIV>
      <P><b>HP</b></P>
      <TABLE cellSpacing=0>
         <TR><TH colSpan=2>Уровни:</TH></TR>
  <TR class=white>
    <TD width="70%">Боевой </TD>
    <TD>1</TD></TR>
  <TR>
    <TD>ѕроизводственный</TD>
    <TD>1</TD></TR>
  <TR class=white>
    <TD>“ехнический</TD>
    <TD>1</TD></TR>
  <TR>
    <TD>¬ождение</TD>
    <TD>1</TD></TR>


    </TBODY></TABLE>
<TABLE cellSpacing=0>
  <TBODY>
  <TR>
    <TH colSpan=2>”мени¤:</TH></TR>
  <TR class=white>
    <TD width="70%">ѕистолеты</TD>
    <TD></TD></TR>
  <TR>
    <TD>јвтоматы</TD>
    <TD></TD></TR>
  <TR class=white>
    <TD>–ужь¤</TD>
    <TD></TD></TR>
  <TR>
    <TD>¬интовки</TD>
    <TD></TD></TR>
  <TR>
  <TR class=white>
    <TD>ѕулеметы</TD>
    <TD></TD></TR>
  <TR>
    <TD>√ранаты</TD>
    <TD></TD></TR>  
  </TBODY></TABLE>



<TABLE cellSpacing=0>
  <TBODY>
  <TR>
    <TH colSpan=2>ѕараметры:</TH></TR>
  <TR class=white>
    <TD width="70%">ћеткость</TD>
    <TD></TD></TR>
  <TR>
    <TD>«доровье</TD>
    <TD></TD></TR>
  <TR class=white>
    <TD>Ћовкость</TD>
    <TD></TD></TR>
  <TR>
    <TD>—ила</TD>
    <TD></TD></TR>


  <TR class=red>
    <TD>ƒоступно дл¤ распределени¤</TD>
    <TD></TD></TR>



    <TR>
    <TH colSpan=2><A 
      href="pers_param.php">Cбросить/–аспределить 
      <SPAN class=arrow>їЫ</SPAN></A></TH></TR></TBODY></TABLE>

<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TBODY>
  <TR>
    <TH>ћесто работы: </TH>
    <TH>ќсталось:</TH></TR>
  <TR class=white>
    <TD width="70%">

</TD>
    <TD>


</TD></TR></TBODY></TABLE>

<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TBODY>
  <TR>
    <TH colSpan=4>ѕриглашени¤: </TH>
  </TR>

  <TR>

      <td><a title="" href="">as</a></td>

      <td width="1"><a href="pers_klans.php?id=&act=ent">¬ступить</a></td>
      <td width="1"><a href="pers_klans.php?id=&act=ex">ќтказатьс¤</a></td>        
  </TR>

</TBODY>
</TABLE>


</DIV>
<!-- Central Block End -->

<!-- Right Block Start -->
<DIV class=right_block>

<P>+ ƒрузь¤ онлайн</P>

<A href="info.php?uin=">Х</A>


</DIV>

<!-- Right Block End -->
<!-- Footer Start -->
<div class="line">&nbsp;</div>
<div class="footer">



<!--Rating@Mail.ru COUNTEr--><script language="JavaScript" type="text/javascript"><!--
d=document;var a='';a+=';r='+escape(d.referrer)
js=10//--></script><script language="JavaScript1.1" type="text/javascript"><!--
a+=';j='+navigator.javaEnabled()
js=11//--></script><script language="JavaScript1.2" type="text/javascript"><!--
s=screen;a+=';s='+s.width+'*'+s.height
a+=';d='+(s.colorDepth?s.colorDepth:s.pixelDepth)
js=12//--></script><script language="JavaScript1.3" type="text/javascript"><!--
js=13//--></script><script language="JavaScript" type="text/javascript"><!--
d.write('<a href="http://top.mail.ru/jump?from=1238716"'+
' target=_top><img src="http://d6.ce.b2.a1.top.list.ru/counter'+
'?id=1238716;t=52;js='+js+a+';rand='+Math.random()+
'" alt="–ейтинг@Mail.ru"'+' border=0 height=31 width=88/><\/a>')
if(11<js)d.write('<'+'!-- ')//--></script><noscript><a
target=_top href="http://top.mail.ru/jump?from=1238716"><img
src="http://d6.ce.b2.a1.top.list.ru/counter?js=na;id=1238716;t=52"
border=0 height=31 width=88
alt="–ейтинг@Mail.ru"/></a></noscript><script language="JavaScript" type="text/javascript"><!--
if(11<js)d.write('--'+'>')//--></script><!--/COUNTER-->


</div>
<!-- Footer End -->
</body></html>
