<?php
class Database
{
	private $servername;
	private $dbusername;
	private $dbpassword;
	private $dbname;

	public function __construct()
	{
		$this->servername='localhost';
		$this->dbusername='root';
		$this->dbpassword='';
		$this->dbname='cis485';
	}
	public function register($user,$pass)
	{
			####################################################
			####################################################
			$conn=new mysqli($this->servername,$this->dbusername,$this->dbpassword,$this->dbname);
			if ($conn->connect_error) die($conn->connect_error);
			####################################################
			$query="SELECT * from login";
			$result = $conn->query($query);
			if(!$result) die($conn->error);
			####################################################
			$rows=$result->num_rows;
			for($i=0;$i<$rows;++$i)
			{
				$result->data_seek($i);
				$row=$result->fetch_array(MYSQLI_ASSOC);
				if($row['userid'] == $user)
				{
					$result->close();
					$conn->close();
					return false;
 				}
			}
			####################################################
			$query="insert into login values('$user','$pass')";
			$result = $conn->query($query);
			if(!$result) die($conn->error);
			####################################################
			//$result->close();
			$conn->close();
			//include("index.php");
			return true;
	}
	public function login($user,$pass)
	{
		####################################################
		$conn=new mysqli($this->servername,$this->dbusername,$this->dbpassword,$this->dbname);
		if ($conn->connect_error) die($conn->connect_error);
		####################################################
		$query="SELECT * from login";
		$result = $conn->query($query);
		if(!$result) die($conn->error);
		####################################################
		$rows=$result->num_rows;
		for($i=0;$i<$rows;++$i)
		{
			$result->data_seek($i);
			$row=$result->fetch_array(MYSQLI_ASSOC);
			$userid=	$row['userid'];
			$password=	$row['password'];
			if(($user == $userid) && ($pass == $password))
			{
				return "true";
				break;
			}
		}
		####################################################
		$result->close();
		$conn->close();
		return "false";
	}
	public function loadcartdb2cookie()
	{
		####################################################
		$conn=new mysqli($this->servername,$this->dbusername,$this->dbpassword,$this->dbname);
		if ($conn->connect_error) die($conn->connect_error);
		####################################################
		$userid=$_SESSION['username'];
		$query="SELECT * from cart where userid='$userid'";
		$result = $conn->query($query);
		if(!$result) die($conn->error);
		####################################################
		$rows=$result->num_rows;
		for($i=0;$i<$rows;++$i)
		{
			$result->data_seek($i);
			$row=$result->fetch_array(MYSQLI_ASSOC);
			$item			=	$row['item'];
			$quantity	=	$row['quantity'];
			$price		= $row['price'];
			echo "item=$item:quantity=$quantity:price=$price";
			$expirtation=time()*60*60*24;
			//setcookie($item,$quantity,$expiration,"/");
			setcookie($item,$quantity,$expiration,"/");
		}
		####################################################
		$result->close();
		$conn->close();
		$this->deletecart($userid);
	}
	public function deletecart($userid)
	{
		####################################################
		$conn=new mysqli($this->servername,$this->dbusername,$this->dbpassword,$this->dbname);
		if ($conn->connect_error) die($conn->connect_error);
		$query="DELETE from cart where userid='$userid'";
		$result = $conn->query($query);
		if(!$result) die($conn->error);
		//$result->close();
		//$conn->close();
	}
	public function executesqlquery($query)
	{
			####################################################
			$conn=new mysqli($this->servername,$this->dbusername,$this->dbpassword,$this->dbname);
			if ($conn->connect_error) die($conn->connect_error);
			####################################################
			$result = $conn->query($query);
			if(!$result) die($conn->error);
	}
	public function removecart($userid)
	{
		####################################################
		$conn=new mysqli($this->servername,$this->dbusername,$this->dbpassword,$this->dbname);
		if ($conn->connect_error) die($conn->connect_error);
		####################################################
		$query="DELETE from cart where userid='$userid'";
		$result = $conn->query($query);
		if(!$result) die($conn->error);
		####################################################
		####################################################
		//$result->close();
		$conn->close();
	}
}
?>
