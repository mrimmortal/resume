<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('loginmodel');
		$this->load->model('selectionmodel');
	}

	public function index()
	{	
		if($this->session->userdata('status'))
{/*
$msg=$this->loginmodel->getmsg();
$data['info']=$msg;
$data['template']='profile.php';*/

$this->load->view('profile');

}
else
{
	$drive_data=$this->readdrivedetails();
	$this->load->view('login',$drive_data);

}
}
public function login()
{

	if($this->session->userdata('userstatus'))
	{
/*$msg=$this->loginmodel->getmsg();
$data['info']=$msg;
$data['template']='profile.php';*/
$Crid=$this->session->userdata('Crid');

$drive_data=$this->readdrivedetails();
$this->load->view('profile',$drive_data);

}
else{

	$formdata=$this->input->post();

	$r=$this->loginmodel->test($formdata);
/*print_r($r);
exit();*/

if ($r)
{
	$this->session->set_userdata(array
		(	
			'FirstName'  => $r[0]->fname,
			'LastName'  => $r[0]->lname,
			'Crid'  => $r[0]->cr_id,
			'userstatus'=> true
		));
/*$msg=$this->loginmodel->getmsg();
$data['info']=$msg;
$data['template']='profile.php';*/
$drive_data=$this->readdrivedetails();
$this->load->view('profile',$drive_data);
}
else 
{
	$this->session->set_flashdata('testerror', '<div class="alert alert-danger">
		<strong>Failed!</strong> Invalid Details.</div>');
	redirect('home/index');
}
}

}

public function register()
{
	$this->load->view('register');
}
public function insert()
{
	$formdata=$this->input->post();
	$this->loginmodel->register0($formdata);
	redirect('home/index');
}
public function applicationform()
{
	if($this->session->userdata('userstatus'))
	{
		$this->load->view('applicationform.php');
	}
	else
	{
		$this->load->view('login');	
	}
}
public function logout()
{
	$this->session->unset_userdata('userstatus');
	$this->session->unset_userdata('FirstName');
	$this->session->unset_userdata('LastName');
	$this->session->unset_userdata('Crid');
	redirect('home');
}

public function adminlogin()
{
	if($this->session->userdata('adminstatus'))
	{
		$drive_data=$this->readdrivedetails();
		$this->load->view('adminhome',$drive_data);
	}
	else{

		$formdata=$this->input->post();
		$r=$this->loginmodel->adminlogin($formdata);
		if ($r)
		{
			$this->session->set_userdata(array
				(	
					'xyz'  => $r[0]->Fullname,
					'adminstatus'=> true,
				));
			$drive_data=$this->readdrivedetails();
			$this->load->view('adminhome',$drive_data);
		}
		else 
		{
			$this->session->set_flashdata('testerror', '<div class="alert alert-danger">
				<strong>Failed!</strong> Invalid Details.</div>');
			redirect('home/adminlogin');
		}
	}

}	
public function admin_page_data()
{
	$temp=$this->loginmodel->admin_page_data_model();
	return $temp;
	$data['admin_data']=$temp;
//$data['template']='profile.php';
	return $data;

}


public function adminlogout()
{
	$this->session->unset_userdata('adminstatus');
	$this->session->unset_userdata('xyz');
	redirect('home');
}
public function addadmin()
{
	$formdata=$this->input->post();
	$this->loginmodel->registeradmin($formdata);
	redirect('home/adminlogin');
}
public function profile()
{
	if($this->session->userdata('userstatus'))
	{
		$drive_data=$this->readdrivedetails();
		$this->load->view('profile',$drive_data);
	}
	else
	{
		$this->load->view('login');	
	}
}

public function request()
{
	$this->load->view('request');
}
public function msg()
{
	$formdata=$this->input->post();
	$formdata['sender']=$this->session->userdata('abc');

	$this->loginmodel->insertmsg($formdata);
	redirect('home/index');
}
public function photo()
{
	$this->load->view('photo');
}
public function selectedImgs()
{
	$formdata=$this->input->post();
	$string="";
	foreach ($formdata as $value) 
	{
		$string=$string.",".$value;

//echo $value;
	}
/*print_r($string);
exit();*/
$this->selectionmodel->select($string);
}

public function set_test()
{
	$this->load->view('set_test');
}

public function updatetestdata()
{
	$formdata=$this->input->post();	
$this->loginmodel->updateqb($formdata);
$this->session->set_flashdata('updatesuccess','<div class="alert alert-success">
	Question Updated <strong>Sucsessfully!</strong></div>');
redirect('home/edittest');

}

public function updatescore()
{
	$formdata=$this->input->post();
	$this->loginmodel->updatescore($formdata);
	$this->session->unset_userdata('did');

	$this->session->set_flashdata('ApplySucess','<div class="alert alert-success">
			Your Application Saved <strong>Sucsessfully!</strong></div>');
	

	redirect('home/profile');
}

//Test Part

public function testdisplay()
{
	
	$this->load->model('testmodel');
	$this->data['questions'] = $this->testmodel->getQuestions();
	$this->load->view('play_test', $this->data);
}
public function editdevelopertest()
{		
		$i='developer';
	$this->load->model('testmodel');
	$this->data['results'] = $this->testmodel->getQuestionsforchange($i);
	$this->load->view('set_test', $this->data);	
}

public function edittestertest()
{	
	$i='tester';
	$this->load->model('testmodel');
	$this->data['results'] = $this->testmodel->getQuestionsforchange($i);
	$this->load->view('set_test', $this->data);	
}
public function resultdisplay()
{
	$formdata=$this->input->post();
//print_r($formdata);
	$this->data['checks'] = array(
		'ques1' => $this->input->post('qid1'),
		'ques2' => $this->input->post('qid2'),
		'ques3' => $this->input->post('qid3'),
		'ques4' => $this->input->post('qid4'),
		'ques5' => $this->input->post('qid5'),
		'ques6' => $this->input->post('qid6'),
		'ques7' => $this->input->post('qid7'),
		'ques8' => $this->input->post('qid8'),
		'ques9' => $this->input->post('qid9'),
		'ques10' => $this->input->post('qid10'),
	);
/*			print_r($this->data);
exit();*/
$this->load->model('testmodel');
$this->data['results'] = $this->testmodel->getQuestions();
$this->load->view('result_display', $this->data);
}

//End Of Test part


public function drivedetails()
{
	$formdata=$this->input->post();
	$this->loginmodel->drivedetails($formdata);
	$this->session->set_flashdata('drivedetailsupdated','<div class="alert alert-success">
		Drive Details Updated <strong>Sucsessfully!</strong></div>');

	redirect('home/adminlogin');
}


public function rdetails()
{
	$formdata = array(
		'r_id' => $this->session->userdata('Crid'),
		'name' => $this->input->post('name'),
		'mobile' => $this->input->post('mobile'),
		'address' => $this->input->post('address'),
		'email' => $this->input->post('email'),
		'date' => $this->input->post('date'),
		'mstatus' => $this->input->post('mstatus'),
		'uniname' => $this->input->post('uniname'),
		'seldeg' => $this->input->post('seldeg'),
		'ascore' => $this->input->post('score'),
		'android' => $this->input->post('android'),
		'java' => $this->input->post('java'),
		'advance_java' => $this->input->post('advance_java'),
		'csharp' => $this->input->post('csharp'),
		'asp' => $this->input->post('asp'),
		'oracle' => $this->input->post('oracle'),
		'php' => $this->input->post('php'),
		'python' => $this->input->post('python'),
		'networking' => $this->input->post('networking'),
		'mvc' => $this->input->post('mvc')
	);
// print_r($formdata);
// exit();	
	$this->loginmodel->rdetail_model($formdata);

	$this->session->set_flashdata('RDetail','<div class="alert alert-success">
		Details Saved<strong>Sucsessfully!</strong></div>');

	redirect('home/profile');
}

public function readdrivedetails()
{
	$drive_data=$this->loginmodel->read_drive_model();
	$data['info']=$drive_data;
//$data['template']='profile.php';
	return $data;

}

public function apply($did,$cid)
{
	$this->session->set_userdata(array
		(	
			'did'  => $did
		));
		
	$a = array(
		'cid' => $cid,
		'did' => $did
	);

	$result = $this->loginmodel->drive_candidate_details_insert_model($a);
	$score =$this->loginmodel->cand_score($a);

	if($result && $score)
	{
		$this->session->set_flashdata('Applyfaild','<div class="alert alert-danger">
			<strong>Failed! </strong>You Can Not Apply More Than One Drive</div>');
		redirect('home/profile');
	}
	else
	{
		$this->testdisplay();
	}
}

public function admin_filter_view_load()
{
	$canlist=$this->loginmodel->candidate_list();
	$data['info']=$canlist;
//$data['template']='profile.php';
	$this->load->view('admin_filter',$data);
}

public function select_drive($did)
{

	$data = array('did' => $did);
	$can_list=$this->loginmodel->candidate_list($data);

	$data['info']=$can_list;

	$this->load->view('admin_filter',$data);

}

public function selected_list($did,$cid)
{
	$a = array(
		'cid' => $cid,
		'did' => $did
	);

	$result = $this->loginmodel->Selected_candidate_details_insert_model($a);

	if($result)
	{
		
		redirect('home/select_drive/'.$did.'');

	}
	else
	{
		
		redirect('home/select_drive/'.$did.'');

	}
}
public function deselect($did,$cid)
{
	$a = array(
		'cid' => $cid,
		'did' => $did
	);

	$result = $this->loginmodel->deselect_candidate_details_insert_model($a);

	if($result)
	{
		
		redirect('home/select_drive/'.$did.'');

	}
	else
	{
		
		redirect('home/select_drive/'.$did.'');

	}
}

public function etest()
{
	$this->load->view('email_form');
}




 public function send_mail() { 
         $from_email = "akshayvdani@gmail.com"; 
         $to_email = $this->input->post('email'); 
   
         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($from_email, 'Your Name'); 
         $this->email->to($to_email);
         $this->email->subject('Email Test'); 
         $this->email->message('Testing the email class.'); 
   
         //Send mail 
         if($this->email->send()) 
         $this->session->set_flashdata("email_sent","Email sent successfully."); 
         else 
         $this->session->set_flashdata("email_sent","Error in sending Email."); 
         $this->load->view('email_form'); 
      } 



}




#shuffle Q
#admin_filter
#scrolls 
