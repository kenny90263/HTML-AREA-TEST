
<{$var}><br>
<{strtoupper($var)}><br>
<{ucwords($var)}><br>

------------------<br>

$var | 函數名:參數1:參數2:參數3<br>

<{$var|upper}><br>
<{$var|upper|truncate:5}><br><br>

<{$smarty.version}> smarty版本<br><br>

<{$smarty.now}> 時間搓<br>
<{$smarty.now|date_format:"%Y-%m-%d"}><br>

<{$var2|default:"這是變數"}><br><br>

<{$var|regex_replace:"/\d/":"#"}><br><br>

<{$var|spacify:"@"}><br><br>

<{$var|truncate:31:"---":true}><br><br>

<{fontstyle($var,5,"red")}><br><br>

<{$var|mystyle:8}>  註冊變量調解器<br><br>