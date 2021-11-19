<HTML>
<BODY>
<TABLE border=1>
<?php
for($tr=0;$tr<10;$tr++)
{
echo '<tr>';
for($td=0;$td<10;$td++)
echo '<td style="color:'.($td % 2 ? 'red' : 'black'). ' ">'.($tr*10+$td+1).'</td>';

echo'</tr>';
}
?>

</TABLE>
</BODY>
</HTML>