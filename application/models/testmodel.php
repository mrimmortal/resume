<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class testmodel extends CI_Model {

	public function getQuestions()
	{
		$this->db->select('*');
		$this->db->from('drivedetails');
		$this->db->where('d_id',$this->session->did);
		$query=$this->db->get();
		$result=$query->result();
		$a=$result[0]->post;
		
		if($a)
		{	
			$this->db->select('*');
			$this->db->from('cregister');
			$this->db->where('cr_id',$this->session->userdata('Crid'));
			$this->db->where('score',NULL);
			$query=$this->db->get();
			$result=$query->result();

			if ($result) {
				$this->db->select("qid, question, choice1, choice2, choice3, answer");
				$this->db->from($a);

				$query = $this->db->get();
				return $query->result();
				$num_data_returned = $query->num_rows;

				if ($num_data_returned < 1) {
					echo "There is no data in the database";
					exit();	
				}
			}

			else
			{
				$this->session->set_flashdata('testnotavalable', '<div class="alert alert-danger">
					<strong>Failed!</strong> Test Not Available.</div>');
				redirect('home/profile');
			}


		}
	}



	public function getQuestionsforchange($a)
	{
	
				$this->db->select("qid, question, choice1, choice2, choice3, answer");
				$this->db->from($a);

				$query = $this->db->get();
				return $query->result();
				$num_data_returned = $query->num_rows;

				if ($num_data_returned < 1) {
					echo "There is no data in the database";
					exit();	
				}
	
	}
}
