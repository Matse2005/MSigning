<!-- Add all your functions here -->
<?php
/** 
 * The current header method can send sometimes a error message to the user.
 * The error message says that the header is already sent.
 * This function is used to prevent this error message.
 * First, we check if the header is already sent.
 * If it isn't, use the header method.
 * If it is, check if javascript is enabled.
 * If it is, use the javascript method.
 * If it isn't, us the pure html method.
 **/
function Location($url)
{
  if (!headers_sent()) {
    header('Location: ' . $url);
  } else {
    echo '<script type="text/javascript">';
    echo 'window.location.href="' . $url . '";';
    echo '</script>';
    echo '<noscript>';
    echo '<meta http-equiv="refresh" content="0;url=' . $url . '" />';
    echo '</noscript>';
  }
}
