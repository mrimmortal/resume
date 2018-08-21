<?php
class selectionmodel extends CI_Model 
{
		public function select($string)
			{
			
				$this->db->set('selected',$string);
				$this->db->where('name',$this->session->userdata('abc'));
				$this->db->update('register');
			}
}			





/*
* User
   - user_id    auto integer
   - regtime    datetime
   - username   varchar
   - useremail  varchar
   - userpass   varchar
 * Question
   - question_id   auto integer
   - question      varchar
   - is_active     enum(0,1)
 * Question_choices
   - choice_id        auto integer
   - question_id      integer
   - is_right_choice  enum(0,1)
   - choice           varchar
 * User_question_answer
   - user_id      integer
   - question_id  integer
   - choice_id    integer
   - is_right     enum(0,1)
   - answer_time  datetime*/