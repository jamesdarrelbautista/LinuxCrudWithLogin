    <?php  
      
    class Login_model extends CI_Model {  
      
        public function createData(){
      		$data = array (
      			'lastName'=>$this->input->post('lastName'),
      			'firstName'=>$this->input->post('firstName'),
      			'username'=>$this->input->post('username'),
      			'password'=>$this->input->post('password'),
      		
      		);
      		$this->db->insert('signup',$data);
      		
      		if ($this->session->userdata('currently_logged_in'))   
            {  
                $data['result'] = $this->Login_model->getAllData();
                $this->load->view('data',$data);  
            } else {  
                redirect('Main/invalid');  
            }
      	
      	}
        
        public function log_in_correctly() {  
      
            $this->db->where('username', $this->input->post('username'));  
            $this->db->where('password', $this->input->post('password'));  
            $query = $this->db->get('signup');  
      
            if ($query->num_rows() == 1)  
            {  
                return true;  
            } else {  
                return false;  
            }  
      
        }  
        
        public function deleteData($id){
        	$this->db->where('id',$id);
        	$this->db->delete('signup');
        
        }
        
        
      	public function getAllData(){
      		$query = $this->db->query('SELECT * FROM signup');
      		return $query->result();
      	
      	}
      	
      	function updateData($id){
      
      		$data = array (
      			'lastName'=>$this->input->post('lastName'),
      			'firstName'=>$this->input->post('firstName'),
      			'username'=>$this->input->post('username'),
      			'password'=>$this->input->post('password'),
      		
      		);
      		$this->db->where('id',$id);
      		$this->db->update('signup',$data);
      	
      	}
      	
      	
      	
      	public function getData($id){
      		$query = $this->db->query("SELECT * FROM signup WHERE `id`=".$id);
      		return $query->row();
      	}
          
          
    }  
    ?>  
