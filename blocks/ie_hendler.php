<?$user_agent = $_SERVER['HTTP_USER_AGENT'];
if ((stripos($user_agent, 'MSIE 6.0') !== false && stripos($user_agent, 'MSIE 8.0') === false && stripos($user_agent, 'MSIE 7.0') === false) || (stripos($user_agent, 'MSIE 5.5') !== false && stripos($user_agent, 'MSIE 8.0') === false && stripos($user_agent, 'MSIE 7.0') === false)) {
   if (!isset($HTTP_COOKIE_VARS["ie"])) {setcookie("ie", "yes", time()+60*60*24*360);header ("Location:/ie6/ie6.html");}
}
?>