<?php
session_start();

class Authldap extends CI_Controller {

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

function index()
	{
        $nid = $this->input->post('username');
        $pass = $this->input->post('password');
		if ($this->ldap_auth($nid,$pass)){
            redirect ('/dashboard','refresh');
        }else{
            redirect ('/login','refresh');
	        }
        }
}
?>					
