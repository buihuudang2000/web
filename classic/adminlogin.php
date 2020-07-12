<?php
    include '../lib/session.php';
    Session::checkLogin();
    include '../lib/database.php';
    include '../helper/format.php';
?>
<?php
    class adminlogin{
        private $db;
        private $fm;
        public function _construct() 
        {
            $this->$db= new Database();
            $this->$fm= new Format();
        }
        public function login_admin($adminUser, $adminPass) 
        {
            $adminUser= $this->fm->validation($adminUser);
            $adminPass= $this->fm->validation($adminPass);

            $adminUser= mysqli_real_escape_string($this->db->link, $adminUser);
            $adminPass= mysqli_real_escape_string($this->db->link, $adminPass);

            if (empty($adminUser) || empty($adminPass)) {
                $alert="Email and Password must be not empty";
                return $alert;
            } else {
                $query = "SELECT * FROM staff WHERE email='$adminUser' AND password='$adminPass' LIMIT 1";
                $result= $this->db->select($query);

                if ($result == true) {
                    $value = $result->fetch_assoc();
                    Session:: set('adminlogin',true);
                    Session:: set('adminid',$value['ID']);
                    Session:: set('adminUser',$value['email']);
                    Session:: set('adminPass',$value['password']);
                    header('Location:home.php');
                } else {
                    $alert="Email or Password not matched";
                return $alert;
                }
            }
        }
    }
?>