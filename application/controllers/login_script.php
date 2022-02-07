<?php

class login_script extends CI_Controller {

function __construct()
	{
     date_default_timezone_set('Asia/Jakarta');
	 $this->load->helper('form'); 
	 $this->load->helper('url'); 
	}

public function getip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
public function write_log($log_msg)
{
    $log_filename = "log";
    if (!file_exists($log_filename)) 
    {
        // create directory/folder uploads.z
        mkdir($log_filename, 0777, true);
    }
    $log_file_data = $log_filename.'/log_' . date('Y-m-d') . '.log';
    // if you don't add `FILE_APPEND`, the file will be erased each time you add a log
    file_put_contents($log_file_data, $log_msg . "\n", FILE_APPEND);
} 

function ldap_auth($nid,$pass)
{
	$LDAP_API_URL = "https://login.ptpjb.com/ldap_api/auth_opendj/post";
	
	$payload = array(
			'username' => $nid,
			'password' => $pass
			);
	
	$postdata = http_build_query($payload);
	$opts = array('http'=> 
							array(
									'header' => "Content-Type: application/x-www-form-urlencoded\r\n".
													"Content-Length: ".strlen($postdata)."\r\n".
													"User-Agent:MyAgent/1.0\r\n",
									'method'  => 'POST',
									'content' => $postdata
							)
				);
	
	$context = stream_context_create($opts);
	$result = file_get_contents($LDAP_API_URL,false,$context);
	return json_decode($result,true);
    
}

function index(){

if (! empty($_POST["login"])) {
    session_start();
	
	if(!isset($_SESSION["count"])) {
		$_SESSION["count"]=1;
	}
	else{
		++$_SESSION["count"];
	}
	
	
	 $username = $_POST["username"];
     $password =  $_POST["password"];
    // $nid = $_POST["username"];
    // $pass =  $_POST["password"];
	//$chek= ldap_auth($nid,$pass);
	if($username="7494015ja" and $password="12345") $chek['valid']=1; // temporary login
	$jam = date("Y-m-d H:i:s");
	$ip= $this->getip();
	//$ip= getip();

    if($chek['valid']== 1 ) 
		{
		$this->write_log( $ip . "," . $username .",".$jam .",login" );
		// $_SESSION["userid"] = $username;
		// $_SESSION["authorized"] = true;
		// $_SESSION["displayname"] = "admin";
        //$chek["userdetail"]["displayname"][0];
		//print_r($chek["userdetail"]["displayname"][0]);
		redirect ('/dashboard','refresh'); // if true login redirrect to dashboard

		$data['site_list'] = $this->Dynamic_chart_model->fetch_year();
		$this->load->view('template/sidebar');
		$this->load->view('dashboard/dashboard', $data);
		$this->load->view('template/js');

		}
	else{
		$this->write_log($ip . "," . $username .",".$jam .",failed" );
		redirect(base_url ('login')); //if wrong username and password reddirect to login
		die;
	}
 }

else {	
	echo "failed!!";
	exit();
}
}
}


?>