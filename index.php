
<script type="text/javascript">    
if (window.parent.frames.length > 0) {    window.stop();    window.parent.location = "http://www.ww90.ru";  }
</script>
<html>
<?php
/* Этот пример приведет к ошибке. Обратите внимание
 * на тэг вверху, который будет выведен до вызова header() */
header('Location: http://www.ww90.ru');
exit;
?>
