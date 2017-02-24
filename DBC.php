<?php
class DBLink{
	public $con;
	function __construct(){
		
		$lines = file('db.txt');
                $sv= trim($lines[0]);
                $un= trim($lines[1]);
                $pw= trim($lines[2]);
                $db= trim($lines[3]);

                $this->con= mysqli_connect($sv, $un, $pw, $db) or die ("DB failed at : __construct()" . mysqli_error($this->con));

	}
	
	function __destruct(){
		mysqli_close($this->con);
	}
	
	//function to validate login
	public function login($valArray){
	    //ADD CRYPT()
	    $SQL= "SELECT * FROM User WHERE (UPPER(Email) = '". strtoupper($valArray["username"]) ."') AND (password = '" . $valArray["password"]. "')";
	    
	   $results = mysqli_query($this->con, $SQL) or die ("DB failed at login(): " . mysqli_error($this->con));
	   if($this->emptyResult($results)) 
	       return false;
	   else 
	       return mysqli_fetch_assoc($results);
	}

	public function addUser($valArray){
	    
	    unset($valArray["pass"]);
	    
	    //ADD CRYPT()
	    $SQL = "INSERT INTO User(FirstName,LastName,Email,Password,UserType) VALUES (";
	    
	    foreach ($valArray as $val)
	        $SQL .= "'" . $val . "',";   
	    
	    $SQL = rtrim($SQL, ',').")";  
	 
	    mysqli_query($this->con, $SQL) or die ("DB failed at addUser(): " . mysqli_error($this->con));
	    
	}
	
    //function to run user-specified query (SQL command)
	public function query($SQL){
		$results = mysqli_query($this->con, $SQL) or die ("DB failed at query(): " . mysqli_error($this->con));
       	 	return $results;

	}
	//function to update password on existent record
	public function update($username, $password){
		
		//echo "using update function <br>";
		//$password = hash('md5', $password);
		$password= crypt($password, "D4E5V22I9K12A1");
		$SQL = "UPDATE users SET password = '$password' WHERE UPPER(username) = '$username'";
		mysqli_query($this->con, $SQL) or die ("DB failed: " . mysqli_error());
	
	}
	
	public function emptyResult($result){
		//echo "using emptyResult() <br>";
		if(mysqli_num_rows($result)==0){
			$var = true;
		}else{
			$var = false;
		}
	
		return $var;
	
	}

}


	
?>
