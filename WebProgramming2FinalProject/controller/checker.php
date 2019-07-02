<?php
session_start();
if(isset( $_SESSION['ON']))
{
   if (time() - $_SESSION['LAST_ACTIVITY'] > 1200)
   {
		session_destroy();
		setcookie(session_name(),"",time()-1,"/");
		setcookie(session_name(),"",time()-1);
		header( 'Location: index.php?error=Session-Time-Out' );
   }
}
else
{
  session_unset();
  session_destroy();
  setcookie(session_name(),"",time()-1,"/");
  setcookie(session_name(),"",time()-1);
  header( 'Location: index.php?error=Invalid-Login' );
}
?>
