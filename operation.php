<?php 

    
    require_once('dbconfig.php');
    $db = new dbconfig();

    class operations extends dbconfig
    {
        // Insert Record in the Database
        public function Store_Record()
        {
            global $db;
            if(isset($_POST['btn_save']))
            {
                $name = $db->check($_POST['name']);
                $surname = $db->check($_POST['surname']);
                $email = $db->check($_POST['email']);
                $password = $db->check($_POST['password']);
            

                if($this->insert_record($name,$surname,$email,$password))
                {
                    echo '<div class="alert alert-success"> Your Record Has Been Saved :) </div>';
                }
                else
                {
                    echo '<div class="alert alert-danger"> Failed </div>';
                }
            }
        }

        public function Store_Cars()
        {
            global $db;
            if(isset($_POST['btn_save']))
            {
                $name = $db->check($_POST['name']);
                $model = $db->check($_POST['model']);
                $price = $db->check($_POST['price']);
                $target_dir = "C:\Users\User\Desktop\ImprovisetDB\photo";
                $target_file = $target_dir . basename($_FILES["photo"]["name"]);

 
                if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
                     echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }

                if($this->insert_cars($name,$model,$price))
                {
                    echo '<div class="alert alert-success"> Your Record Has Been Saved :) </div>';
                }
                else
                {
                    echo '<div class="alert alert-danger"> Failed </div>';
                }
            }
        }


        
      // Insert Record in the Database Using Query    
      function insert_record($a,$b,$c,$d)
      {
          global $db;
          $query = "insert into user (name,surname,email,password) values('$a','$b','$c','$d')";
          $result = mysqli_query($db->connection,$query);

          if($result)
          {
              return true;
          }
          else
          {
              return false;
          }
      }

      // Insert Record in the Cars Using Query    
      function insert_cars($a,$b,$c)
      {
          global $db;
          $query = "insert into cars (name,model,price) values('$a','$b','$c')";
          $result = mysqli_query($db->connection,$query);

          if($result)
          {
              return true;
          }
          else
          {
              return false;
          }
      }

    }




        ?>