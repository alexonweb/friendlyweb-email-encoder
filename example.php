<?php

/*
 * Email encoding usage examples
 */

require 'FriendlyWeb/EncodeMailAddress/EncodeMailAddress.php';

$encodeMail = new FriendlyWeb\EncodeMailAddress();

$email = 'example@gmail.com';

// Method will find the email address and only encode it

$line = "<a href=\"mailto:$email\">$email</a>";

$encodeline = $encodeMail->encodeMail($line);

echo $encodeline;

// or you can encode email separately

$mailto = $encodeMail->encodeMail($email);

?>

<a href="mailto: <?php echo $mailto ?>"><?php echo $mailto ?></a>