#### ✨ Configuration
Replace the HTML :
https://github.com/zahsey/webPortfolio/blob/master/index.php
```html
<a href="https://wa.me/(Your Number)?text=Hello Zumpid" target="_blank"></a>
```
Replace the PHP Code :
https://github.com/zahsey/webPortfolio/edit/master/send.php
```php
$mail->SMTPDebug = 0;
$mail->isSMTP();
$mail->Host = "tls://smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "(Your Email)";
$mail->Password = "(Your Password)";
$mail->SMTPSecure = "tls";
$mail->Port = 587;
```
