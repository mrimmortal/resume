<?php
class loginmodel extends CI_Model 
{

	public function test($data)
	{
		$this->db->select('*');
		$this->db->from('cregister');
		$this->db->where('email',$data['email']); 
		$this->db->where('password',$data['password']); 
		$query=$this->db->get();
		$result=$query->result();

		return $result;
	}
	public function adminlogin($data)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('email',$data['email']);
		$this->db->where('mobile',$data['mobile']); 
		$this->db->where('password',$data['password']); 
		$query=$this->db->get();
		$result=$query->result();

		return $result;
	}

	public function register0($formdata)
	{
		$this->db->select('*');
		$this->db->from('cregister');
		$this->db->where('email',$formdata['email']);
		$query=$this->db->get();
		$result=$query->result();
//echo "hi";
		if($result)
		{
			$this->session->set_flashdata('alreadyexist','<div class="alert alert-danger">
				Candidate is <strong> Already Exist!</strong></div>');
		}

		else
		{
			$this->db->insert('cregister',$formdata);	
			$this->session->set_flashdata('register','<div class="alert alert-success">
				Registration <strong>Sucsessfully!</strong> Please Go For Login</div>');
		}


	}
	public function insertmsg($data)
	{
		$this->db->insert('msg',$data);

	}
	public function registeradmin($formdata)
	{
		/*echo "Admin Added successfully";*/
		$this->db->insert('admin',$formdata);
	}


	public function updateqb($formdata)
	{
/*$this->db->where('qid',$formdata['qid']); 
$this->db->set('question',$formdata['question']
$this->db->set('choice1',$formdata['choice1']
$this->db->set('choice2',$formdata['choice2']
$this->db->set('choice3',$formdata['choice3']
$this->db->set('answer',$formdata['choice3']);
$this->db->update('cat');*/

$this->db->where('qid',$formdata['qid']); 
$a = array(
	"question" => $formdata['question'],
	"choice1" => $formdata['choice1'],
	"choice2" => $formdata['choice2'],
	"choice3" => $formdata['choice3'],
	"answer" => $formdata['answer']
); 
$this->db->update('test', $a);
}


public function updatescore($formdata)
{
	$this->db->where('cr_id',$this->session->userdata('Crid'));
	$this->db->set('score',$formdata['score']);
	$this->db->update('cregister');
}
/*public function getmsg()
{
$this->db->select('*');
$this->db->from('msg');
$query=$this->db->get();
$result=$query->result();

return $result;

}*/
public function drivedetails($formdata)
{

	$this->db->insert('drivedetails',$formdata);
}


public function rdetail_model($formdata)
{

	$this->db->insert('rdetails',$formdata);
}

public function read_drive_model()
{
	$this->db->select("*");
	$this->db->from("drivedetails");
	$query = $this->db->get();
	$result = $query->result();
	return $result;
}

public function drive_candidate_details_insert_model($a)
{	
	$this->db->select('*');
	$this->db->from('can_drive');
	$this->db->where('cid',$a['cid']);
	$this->db->where('did',$a['did']); 
	$query=$this->db->get();
	$result=$query->result();

	if($result)
	{	
		return $result;
	}

	else{
		$this->db->insert('can_drive',$a);
	}

}

public function candidate_list($data)
{
	$this->db->select('*');
	$this->db->from('cregister');
	$this->db->join('can_drive','cregister.cr_id = can_drive.cid'); 
	$this->db->join('rdetails','cregister.cr_id = rdetails.r_id'); 
	$this->db->where(array('can_drive.did' => $data['did']));
	$this->db->order_by('ascore','desc');
	$query = $this->db->get();
	return $query->result();
}

public function Selected_candidate_details_insert_model($a)
{	
	$s=1;
	$this->db->select('*');
	$this->db->from('can_drive');
	$this->db->where('cid',$a['cid']);
	$this->db->where('did',$a['did']); 
	$query=$this->db->get();
	$result=$query->result();
	
	if($result)
	{	
	$this->db->where('cid',$a['cid']);
	$this->db->where('did',$a['did']); 
	$this->db->set('selected',$s);
	$this->db->update('can_drive');
	}

}

public function deselect_candidate_details_insert_model($a)
{	
	$s=0;
	$this->db->select('*');
	$this->db->from('can_drive');
	$this->db->where('cid',$a['cid']);
	$this->db->where('did',$a['did']); 
	$query=$this->db->get();
	$result=$query->result();

	if($result)
	{	
	$this->db->where('cid',$a['cid']);
	$this->db->where('did',$a['did']); 
	$this->db->set('selected',$s);
	$this->db->update('can_drive');
	}

}


public function cand_score($a)
{
	$this->db->select('*');
	$this->db->from('cregister');
	$this->db->where('cr_id',$a['cid']);
	$query=$this->db->get();
	$result=$query->result();

	if($result)
	{
	return $result[0]->score;
}
}
}
