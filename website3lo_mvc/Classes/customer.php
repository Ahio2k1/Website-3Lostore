<?php
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/../lib/database.php');
    include_once ($filepath.'/../helpers/format.php');
?>


<?php

class customer
{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
 
   
    public function insert_customers($data){
        $name = mysqli_real_escape_string($this->db->link, $data['name']);
        $address = mysqli_real_escape_string($this->db->link, $data['address']);
        $city = mysqli_real_escape_string($this->db->link, $data['city']);
        $phone= mysqli_real_escape_string($this->db->link, $data['phone']);
        $email = mysqli_real_escape_string($this->db->link, $data['email']);
        $password = mysqli_real_escape_string($this->db->link, ($data['password']));
        if($name=="" || $address=="" || $city=="" || $phone=="" || $email=="" || $password==""){
            $alert = "<span> Fields must be not empty</span>";  
            return $alert;
        }else{
            $check_email = "SELECT * FROM tbl_customer WHERE email='$email' limit 1";
            $result_check = $this->db->select($check_email);
        if($result_check){
            $alert = "<span class='error'> Email Already Existed</span>";
            return $alert;
        }else{
            $query = "INSERT INTO tbl_customer(name,address,city,phone,email,password) VALUES('$name','$address','$city','$phone', '$email','password')";
            $result = $this->db->insert($query);
            if($result){
                $alert = "<span>Customer created Successfully</span>";
                return $alert;
            }
            else{
                $alert ="<span>Customer created not Successfully</span>";                
                return $alert;
            }

        }

        }

       }
       public function login_customers($data){
        $email = mysqli_real_escape_string($this->db->link, $data['email']);
        $password = mysqli_real_escape_string($this->db->link, ($data['password']));

        if($email=='' || $password=='' ){
            $alert = "<span style='color:red;font-size:18px;' > Password and Email must be not empty</span>";  
            return $alert;
        }else{
            $check_login = "SELECT * FROM tbl_customer WHERE email='$email' AND password='$password'";
            $result_check = $this->db->select($check_login);
        if($result_check ){
            $value = $result_check->fetch_assoc();
            Session::set('customer_login', true);
            Session::set('customer_id',$value['id']);
            Session::set('customer_name',$value['name']);
            header('Location:order.php');

            
        }else{
            $alert = "<span style='color:red;font-size:18px; class='error'> Email or Password doesn't match</span>";
            return $alert;
            }

        }

        }
        public function show_customers($id){
            $query = "SELECT * FROM tbl_customer WHERE id='$id' ";
            $result = $this->db->select($query);
            return $result;
        }
        public function update_customers($data,$id){
            $name = mysqli_real_escape_string($this->db->link, $data['name']);
            $address = mysqli_real_escape_string($this->db->link, $data['address']);
            $phone= mysqli_real_escape_string($this->db->link, $data['phone']);
            $email = mysqli_real_escape_string($this->db->link, $data['email']);

            if($name=="" || $address=="" || $phone=="" || $email=="" ){
                $alert = "<span style='color:red;font-size:18px; class='error'> Fields must be not empty</span>";  
                return $alert;
            }else{
                $query = "UPDATE  tbl_customer SET name='$name',address='$address',phone='$phone',email='$email' WHERE id='$id'";
                $result = $this->db->insert($query);
                if($result){
                    $alert = "<span style='color:green;font-size:18px; class='success' >Customer Updated Successfully</span>";
                    return $alert;
                }
                else{
                    $alert ="<span style='color:red;font-size:18px; class='error' >Customer Updated not Successfully</span>";                
                    return $alert;
                }
    
            }
    
            }
    
        }
       
    

    
 
?>
