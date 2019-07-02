<?php
include_once("model/Database.php");
class Controller
{
	public $model;
	public function __construct()
	{
		//$this­>model = new Model();
	}
	public function invoke()
	{
		$choice=readValue("choice");
		if($choice==null)
		{
			$errormsg=null;
			include("view/login2.php");
		}
		else if($choice=="logon")
		{
			$user =$_GET['username'];
			$pass =$_GET['password'];
			//--------------------------
			$db=new Database();
			$flag=$db->login($user,$pass);
			//--------------------------
			//$flag="false";
			//include "listsquaredb.php";
			//--------------------------
			//echo "$flag";
			//exit(0);
			if ($flag=="true")
			{
				session_start();
				$_SESSION['username'] = $user;
				$_SESSION['userid'] = $user;
				$_SESSION['password'] = $pass;

				$_SESSION['ON'] = "TRUE";

				$lifetime=3600;
				setcookie(session_name(),session_id(),time()+$lifetime);
				$expiration=time()+60*60*24* 10;
				setcookie("whoami",$user,$expiration);
				$_SESSION['LAST_ACTIVITY'] = time();
				$db->loadcartdb2cookie();
				//include('controller/loadcartdb.php');
				//header( 'Location: products.php' ) ;
				header('Location: index.php?choice=home');
				//Don't want choice to be products!
				exit(0);
			}
			else
			{
				//echo "TESTING";
				//exit(0);
				$errormsg="Invalid_Login";
				include( "view/login2.php");
			}
		}
		else if($choice=="registration")
		{
			//echo "REGS";
			$errormsg=null;
			include("view/registration2.php");
		}
		else if($choice=="register")
		{
			$user=$_GET['username'];
			$pass=$_GET['password'];
			$db=new Database();
			if($db->register($user,$pass)) header("Location: index.php");
			else
			{
					$errormsg="ERROR: Userid_Already_In_Use";
					include("view/registration2.php");
			}
		}
		else if($choice=="home") {
			require("controller/checker.php");
			include("view/home.php");
		}
		else if($choice=="otter") {
			require("controller/checker.php");
			include("view/otter-single.php");
		}
		else if($choice=="badger") {
			require("controller/checker.php");
			include("view/badger-single.php");
		}
		else if($choice=="ferret") {
			require("controller/checker.php");
			include("view/ferret-single.php");
		}
		else if($choice=="marten") {
			require("controller/checker.php");
			include("view/martens-single.php");
		}
		else if($choice=="rabbit") {
			require("controller/checker.php");
			include("view/rabbit-single.php");
		}
		else if($choice=="hare") {
			require("controller/checker.php");
			include("view/hare-single.php");
		}
		else if($choice=="pika") {
			require("controller/checker.php");
			include("view/pika-single.php");
		}
		else if($choice=="jackalope") {
			require("controller/checker.php");
			include("view/jackalope-single.php");
		}
		else if($choice=="snow_leopard") {
			require("controller/checker.php");
			include("view/snow_leopard-single.php");
		}
		else if($choice=="cheetah") {
			require("controller/checker.php");
			include("view/cheetah-single.php");
		}
		else if($choice=="panther") {
			require("controller/checker.php");
			include("view/panther-single.php");
		}
		else if ($choice=="puma") {
			require("controller/checker.php");
			include("view/puma-single.php");
		}
		else if($choice=="about")
		{
			require("controller/checker.php");
			include('view/about2.php' );
		}
		else if($choice=="contact")
		{
			require("controller/checker.php");
			include('view/contact2.php' );
		}
		else if($choice=="cart") {
			require("controller/checker.php");
			include('view/cart2.php' );
		}
		else if ($choice=="checkout") {
			require("controller/checker.php");
			include('view/checkout.php');
		}
		else if ($choice=="thankyou") {
			require("controller/checker.php");
			include('view/thankyou.php');
		}
		else if($choice=="logoff")
		{
			//require("controller/checker.php");
			include('view/logoff2.php' );
		}
		else if($choice=="logoff2")
		{
			//require("controller/checker.php");
			session_start();
			require("catalog2.php");
			$len=sizeof(items);
			echo "LEN=$len";
			$db=new Database();
			for($i=0;$i<sizeof($items);$i++)
			{
				$cookievalue=$_COOKIE[$items[$i]];
				echo "i=$i:$cookievalue";
				if( $cookievalue ==NULL);
				else
				{
					echo "2:$cookievalue";
					$cookievalue=(int)$cookievalue;
					$userid=$_SESSION['username'];
					echo "USERID:$userid";
					setcookie($items[$i],"",time()-1,"/");
					setcookie($items[$i],"",time()-1);
					$query="insert into cart values('$userid','$items[$i]',$cookievalue,$prices[$i])";
					$db->executesqlquery($query);
				}
			}
			session_unset();
			session_destroy();
			setcookie(session_name(),"",time()-1,"/");
			setcookie(session_name(),"",time()-1);
			header( 'Location: index.php?message=Logoff-Sucessful' );
		}
		else if($choice=="thankyou")
		{
			require("controller/checker.php");
			session_start();
			require("catalog.php");
			$userid=$_SESSION['userid'];
			$db=new Database();
			$db->removecart($userid);
			echo "CART DELETED";
			$len=sizeof(items);
			echo "LEN=$len";
			for($i=0;$i<sizeof($items);$i++)
			{
				$cookievalue=$_COOKIE[$items[$i]];
				echo "i=$i:$cookievalue";
				if( $cookievalue ==NULL);
				else
				{
					echo "2:$cookievalue";
					$cookievalue=(int)$cookievalue;
					$userid=$_SESSION['username'];
					echo "USERID:$userid";
					setcookie($items[$i],"",time()-1,"/");
					setcookie($items[$i],"",time()-1);
				}
			}
			header("Location: index.php?choice=thankyou2");
		}
	}
}
?>
