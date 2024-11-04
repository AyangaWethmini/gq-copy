<?php

    class Admin extends Controller {
        public function index(){
            // echo 'Index function loaded';
        }
        
        public function adminannouncement(){
            $data = [];
            
            $this->view('admin/announcement', $data);
        }

        public function admincreateannouncement(){
            $data = [];
            
            $this->view('admin/create_announcement', $data);
        }

        public function admincomplaints(){
            $data = [];
            
            $this->view('admin/complaints', $data);
        }

        public function adminreviewcomplaints(){
            $data = [];
            
            $this->view('admin/reviewcomplaint', $data);
        }

        public function adminmanageusers(){
            $data = [];
            
            $this->view('users', $data);
        }

        public function adminsettings(){
            $data = [];
            
            $this->view('admin/settings', $data);
        }

        public function adminlogindetails(){
            $data = [];
            
            $this->view('admin/logindetails', $data);
        }

        public function admindeleteaccount(){
            $data = [];
            
            $this->view('admin/delete_account', $data);
        }
        
    }



