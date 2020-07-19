<?php

define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', "bank");

class DB_con
{
	public $conn;
	public $cat;
	public $data;
	public $qus;
	public $result;
	function __construct()
	{
		$this->conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) or die('localhost connection problem'.mysqli_connect_error());
	}
	//inserting into users database
	public function users_insert($name,$email,$password)
	{
		$sql = "INSERT into users(name,email,password) VALUES('$name','$email','$password')";
		if(mysqli_query($this->conn, $sql)){
			return true;
		} else{
			return false;
		}
  }

	//search email
	public function serach_email($email)
	{
		$sql = "SELECT name FROM users WHERE email = '$email'";
		$res = mysqli_query($this->conn, $sql);
		return $res;
	}

	public function serach_adminemail($email)
	{
		$sql = "SELECT email FROM admin WHERE email = '$email'";
		$res = mysqli_query($this->conn, $sql);
		return $res;
	}

	public function admin($email,$password)
	{
		$sql = "SELECT email,password FROM admin WHERE email = '$email' and password='$password'";
		$res = mysqli_query($this->conn, $sql);
		return $res;
	}
	public function serach_moderatoremail($email)
	{
		$sql = "SELECT email FROM moderator WHERE email = '$email'";
		$res = mysqli_query($this->conn, $sql);
		return $res;
	}

	public function moderator($email,$password)
	{
		$sql = "SELECT email,password FROM moderator WHERE email = '$email' and password='$password'";
		$res = mysqli_query($this->conn, $sql);
		return $res;
	}
	//user authentication
	public function log_in($email,$password)
	{
		$sql = "SELECT name,email,user_id FROM users WHERE email = '$email' and password='$password'";
		$res = mysqli_query($this->conn, $sql);
		return $res;
	}
	public function cat_shows()
	{
		$query=$this->conn->query("select * from category");
	   while($row=$query->fetch_array(MYSQLI_ASSOC))
		{

			$this->cat[]=$row;
		}
		return $this->cat;

	}
	public function r_cat_shows()
	{ $email=$_SESSION['email'];
		$query=$this->conn->query("select * from rating where email='$email'");
	   while($row=$query->fetch_array(MYSQLI_ASSOC))
		{

			$this->cat[]=$row;
		}
		return $this->cat;

	}

	public function p_cat_shows()
	{
		$query=$this->conn->query("select * from category ");
	   while($row=$query->fetch_array(MYSQLI_ASSOC))
		{

			$this->cat[]=$row;
		}
		return $this->cat;

	}


	public function	users_profile($email)
	{
		$query=$this->conn->query("select * from users where email='$email'");
	    $row=$query->fetch_array(MYSQLI_ASSOC);
		if($query->num_rows>0)
		{
			$this->data[]=$row;
		}
		return $this->data;
	}
	public function qus_show($qus)
	{
		//echo $qus;
		 $query=$this->conn->query("select * from questions where cat_id='$qus'");
	    while($row=$query->fetch_array(MYSQLI_ASSOC))
		{
			$this->qus[]=$row;
		}
		return $this->qus;
	}

	public function result_show($result)
	{  $email=$_SESSION['email'];
		//echo $qus;
		 $query=$this->conn->query("select * from rating where cat_id='$result'and email='$email'");
	    while($row=$query->fetch_array(MYSQLI_ASSOC))
		{
			$this->result[]=$row;
		}
		return $this->result ;
	}
	public function p_result_show($result)
	{
		//echo $qus;
		 $query=$this->conn->query("select * from rating where cat_id='$result' ORDER BY average DESC");
			while($row=$query->fetch_array(MYSQLI_ASSOC))
		{
			$this->result[]=$row;
		}
		return $this->result ;
	}
	public function answer($data)
	{
		 $ans=implode("",$data);
		 $right=0;
		 $wrong=0;
		 $no_answer=0;
		 $query=$this->conn->query("select id,ans from questions where cat_id='".$_SESSION['cat']."'");
	    while($qust=$query->fetch_array(MYSQLI_ASSOC))
		{
			if($qust['ans']==$_POST[$qust['id']])
			{
				 $right++;
			}
			elseif($_POST[$qust['id']]=="no_attempt")
			{
				 $no_answer++;
			}
			else
			{
				$wrong++;
			}
		}
		$array=array();
		$array['right']=$right;
		$array['wrong']=$wrong;
		$array['no_answer']=$no_answer;
		return $array;

	}
	public function add_quiz($rec)
	{
		$a=$this->conn->query($rec);
		return true;
	}
	public function url($url)
	{
		header("location:".$url);
	}
}
?>
