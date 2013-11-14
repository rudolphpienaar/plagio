<?php

if(isset($_GET['IECheck'])){
  $iecheck = $_GET['IECheck'];
}
else{
  $iecheck = 1;
}

$IETag = '';
if($iecheck){
  $IETag = '
<!--[if IE]>
<script>
var tmpFunc = window.onload;
window.onload =  function() {
  document.getElementById("open-overlay").click();
  tmpFunc();
}
</script>
<![endif]-->
';
}

$content = file_get_contents("templates/home.html");
// add overlay
$content = str_replace('${OVERLAY}', file_get_contents("templates/overlay.html"), $content);
// add IE Test
$content = str_replace('${IETAG}', $IETag, $content);
// add IECheck
$content = str_replace('${IECHECK}', $iecheck, $content);
// add footer
$content = str_replace('${FOOTER}', file_get_contents("templates/footer.html"), $content);

echo $content;

?>
