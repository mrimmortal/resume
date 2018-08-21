<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class test extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function testdisplay()
	{
		$this->load->model('testmodel');
		$this->data['questions'] = $this->testmodel->getQuestions();
		$this->load->view('play_test', $this->data);
	}
	
		public function resultdisplay()
	{
		$this->data['checks'] = array(
		     'ques1' => $this->input->post('quizid1'),
		     'ques2' => $this->input->post('quizid2'),
			 'ques3' => $this->input->post('quizid3'),
			 'ques4' => $this->input->post('quizid4'),
		     'ques5' => $this->input->post('quizid5'),
			 'ques6' => $this->input->post('quizid6'),
			 'ques7' => $this->input->post('quizid7'),
			 'ques8' => $this->input->post('quizid8'),
		     'ques9' => $this->input->post('quizid9'),
			 'ques10' => $this->input->post('quizid10'),
		);

        $this->load->model('testmodel');
		$this->data['results'] = $this->testmodel->getQuestions();
		$this->load->view('result_display', $this->data);
	}
}

