<?php
session_start();

$nid = @$_GET['username'];
$pass = @$_GET['password'];
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
													"Content-Length: ".strlen($postdatax)."\r\n".
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
		if (ldap_auth($nid,$pass)){
            $data['site_list'] = $this->Dynamic_chart_model->fetch_year();
		$this->load->view('template/sidebar');
		$this->load->view('dashboard/dashboard', $data);
		$this->load->view('template/js');
        }
        $this->load->view('login');
	}
?>					
