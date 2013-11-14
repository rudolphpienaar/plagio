<?php

include('ietag.php');

$content = file_get_contents("templates/whatToExpectDuringYourStudyVisit.html");

// add IE Test
$content = str_replace('${IETAG}', $IETag, $content);
// add IECheck
$content = str_replace('${IECHECK}', $iecheck, $content);
// add footer
$content = str_replace('${FOOTER}', file_get_contents("templates/footer.html"), $content);

echo $content;

?>
