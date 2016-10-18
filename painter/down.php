<?php  
header('Content-Type:image/png');
header('Content-Disposition:attachment;filename="down.png"');

echo base64_decode($_POST['dataurl']);

?>