<?php



define("TABLE_MIXER", "mixer");
define("TABLE_MIXER_PENDING", "mixer_pending");

define("MEMBER_FEE" , "0.52" );
define("NONMEMBER_FEE" , "11" );


define("RETURN_URL","http://www.sctennisclub.org/signup/done");
define("CANCEL_URL","http://www.sctennisclub.org/signup/cancel");
define("NOTIFY_URL","http://www.sctennisclub.org/signup/notify.php");


function DEBUG($message){

 // echo( $message );
 // echo("<br>");
 // echo("\n");

}

function add ($p)
{
	return ',"'.$p.'"';
}
 
 function savetoDB(){
 
 
	 echo "to DB";
 
	 
 }


 function toDB($theTABLE, $fname,$lname,$gender,$ntrp,$email, $member,$paid,$date,$custom,$event){

  $con = DBMembership();

  $query = 'insert into '.$theTABLE.'(_id,fname,lname,gender,ntrp,email,member,paid,date,custom,event) values';
  $query .= '(NULL'.add($fname).add($lname).add($gender).add($ntrp).add($email).add($member).add($paid);
  $query .= add($date).add($custom).add($event) ;
  $query .= ")";

//  echo "<br>";
  echo $query."<br>";
  $query_results=mysqli_query($con, $query);

}


function onLINE(){

   if ( !isset($_SERVER["SERVER_NAME"] )){
     DEBUG("COMMAND LINE");
     return false;

   }

  $ret = true;
  if ( array_key_exists( "SERVER_NAME" , $_SERVER) && $_SERVER["SERVER_NAME"]=="localhost"){
    DEBUG("LOCALHOST");
    $ret = false;
  }

  DEBUG("ONLINE");
  return $ret;

}
  
function DBMembership()
{

	      $HOST = "127.0.0.1";
          $USER = "roger";
          $USER = "root";
          $PASSWORD = "tomato1349";
          $DB= "sctc2019";
  
		  if(onLINE() ){
          
			if(strstr($_SERVER["SERVER_NAME"],"sctennis")){
            $HOST = "gonefishing.globatmysql.com";
            $HOST = "sctennisclub.globatmysql.com";
  
  
              $USER="sctc";
              $PASSWORD="tomato";
              $DB= DB_MEMBERSHIP;  
              $DB= "sctc2019";     // globat DB in gonefishing
  
			}
          }
  
         DEBUG($HOST." ".$USER."  ".$PASSWORD." ".$DB );

         $con = mysqli_connect($HOST,$USER, $PASSWORD) or
          die('Could not connect: <font color="red">'.mysql_error().'</font>');
  
  
      $ret = mysqli_select_db($con ,$DB );
  
      

          return $con;
  }





?>