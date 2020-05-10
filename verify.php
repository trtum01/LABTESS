
<?php 
  $access_token = 'e92zT7h+LyozbFlLY7ruLFWg3ol0Ebqfiwi8WEdFHVwtF3WdE4PI+fx0GlKkHTkeNfXmMpfNje5M9c8P91HG4Ph2L5KIA3ZrFrn51qOUWumRxiHZO/u24zr9E1LmAU6r0+TpQfGShOtsxZNYlqoHrgdB04t89/1O/w1cDnyilFU=';
  $url = 'https://api.line.me/v1/oauth/verify';
  $headers = array('Authorization: Bearer ' . $access_token);
  $ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  $result = curl_exec($ch);curl_close($ch);
  echo $result;
?>