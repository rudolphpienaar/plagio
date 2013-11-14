<?php

if(isset($_GET['IECheck'])){
  $iecheck = $_GET['IECheck'];
}
else{
  $iecheck = 1;
}

$content = file_get_contents("templates/whoWeAre.html");

// add IECheck
$content = str_replace('${IECHECK}', $iecheck, $content);
// add footer
$content = str_replace('${FOOTER}', file_get_contents("templates/footer.html"), $content);

echo $content;
?>
