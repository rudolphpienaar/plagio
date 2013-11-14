<?php

if(isset($_GET['IECheck'])){
  $iecheck = $_GET['IECheck'];
}
else{
  $iecheck = 1;
}

$IETag = '';
if($iecheck){
  $IETag = '<!--[if IE]>
<style>
.IERocks { display:inline; zoom:1; }
</style>
<script type="text/javascript">
window.open("ieWarning.php", "_self");
</script>
<![endif]-->
';
}
?>
