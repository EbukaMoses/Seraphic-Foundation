<?php
session_start();
    include "../db/db.php";
    include "helper.php";


// Registering a New Volunteer 
if(isset($_POST["vol_btn"])){
    $fullname = mysqli_real_escape_string($connection, $_POST['vol_name']);
    $email = mysqli_real_escape_string($connection, $_POST['vol_email']);
    $phone = mysqli_real_escape_string($connection, $_POST['vol_phone']);
    $gender = mysqli_real_escape_string($connection, $_POST['gender']);
    $address = mysqli_real_escape_string($connection, $_POST['vol_address']);
    $msg = mysqli_real_escape_string($connection, $_POST['vol_msg']);


    
    $fullname = validate_input_value($fullname);
    $email = validate_input_email($email);
    $phone = validate_input_value($phone);
    // $gender = validate_input_value($gender);
    $address = validate_input_value($address);
    $msg = validate_input_value($msg);


    if(empty($fullname) || empty($email) || empty($phone) || empty($gender) || empty($address)){
        $_SESSION['error'] = "Fill the neccessary inputs!!!";
        header("Location: ../../volunteer.php");
        exit(0);
    } 
    
    if(!$email){
        $_SESSION['error'] = "E-mail address not correct!!!";
        header("Location: ../../volunteer.php");
        exit(0);
    }

    $checkemail = "SELECT vol_email, vol_phone FROM volunteers WHERE vol_email = '$email' AND vol_phone = '$phone'";
    $checkemail_run = mysqli_query($connection, $checkemail);

    if(mysqli_num_rows($checkemail_run) > 0){
        //Already email exist
        $_SESSION['error'] = "You have already Volunteered!!";
            header("Location: ../../volunteer.php");
            exit(0);
    }
    if(empty($msg)){
        $msg = "I just volunteered and would like to get updates on up coming events. Thanks";
    }

    $query = "INSERT INTO volunteers (vol_name, vol_email, vol_phone, gender, vol_address, vol_msg, vol_date) VALUES ('{$fullname}', '{$email}', '{$phone}', '{$gender}', '{$address}', '{$msg}', NOW())";
        $run_query = mysqli_query($connection, $query);

        $msg_query = "INSERT INTO message (name, msg_cat, msg_content, msg_status, msg_date) VALUES('{$fullname}', 'Volunteer', 'You have one new Volunteer', 'unread', NOW())";
         $run_msg_query = mysqli_query($connection, $msg_query);
        
        if(!$run_query){
            die("QUERY FAILED ". mysqli_error($connection) . ' ' . mysqli_errno($connection));
        }
        $_SESSION['message'] = "Registeration Successfully!!!";
        header("Location: ../../volunteer.php");
        exit(0);    
}



//Registering A New Partner
if(isset($_POST["partner_btn"])){
    
    $fullname = mysqli_real_escape_string($connection, $_POST['fullname']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $gender = mysqli_real_escape_string($connection, $_POST['gender']);
    $phone1 = mysqli_real_escape_string($connection, $_POST['phone1']);
    $phone2 = mysqli_real_escape_string($connection, $_POST['phone2']);
    $res_street = mysqli_real_escape_string($connection, $_POST['res_street']);
    $res_town = mysqli_real_escape_string($connection, $_POST['res_town']);
    $res_state = mysqli_real_escape_string($connection, $_POST['res_state']);
    $res_country = mysqli_real_escape_string($connection, $_POST['res_country']);
    $orig_street = mysqli_real_escape_string($connection, $_POST['orig_street']);
    $orig_town = mysqli_real_escape_string($connection, $_POST['orig_town']);
    $orig_state = mysqli_real_escape_string($connection, $_POST['orig_state']);
    $orig_country = mysqli_real_escape_string($connection, $_POST['orig_country']);
    $occupation = mysqli_real_escape_string($connection, $_POST['occupation']);
    $pay = mysqli_real_escape_string($connection, $_POST['pay']);

    
    $fullname =  validate_input_value($fullname);
    $email = validate_input_email($email);
    $code = 002;
    $phone1 = validate_input_value($phone1);
    $phone2 = validate_input_value($phone2);
    $res_street = validate_input_value($res_street);
    $res_town = validate_input_value($res_town);
    $res_state = validate_input_value($res_state);
    $res_country = validate_input_value($res_country);
    $orig_street = validate_input_value($orig_street);
    $orig_town = validate_input_value($orig_town);
    $orig_state = validate_input_value($orig_state);
    $orig_country = validate_input_value($orig_country);
    $occupation = validate_input_value($occupation);
    $pay = validate_input_value($pay);

    $pro_img = $_FILES['upload_profile']['name'];
    $pro_img_temp = $_FILES['upload_profile']['tmp_name'];
    
    $image_extension = pathinfo($pro_img, PATHINFO_EXTENSION);
       
    $filename = $email .'.'. $image_extension;
    $allowTypes = array('jpg','png','jpeg','gif');    



    if(!empty($fullname) || !empty($email) || !empty($gender) || !empty($phone1) || !empty($res_street) || !empty($res_town) || !empty($res_state) || !empty($res_country) || !empty($orig_street) || !empty($orig_town) || !empty($orig_state) || !empty($orig_country) || !empty($occupation) || !empty($pay)){

        $checkemail = "SELECT email FROM partners WHERE email = '$email'";
        $checkemail_run = mysqli_query($connection, $checkemail);

        if(mysqli_num_rows($checkemail_run) > 0){
            //Already email exist
            $_SESSION['error'] = "User Already Registered as a Partner!!";
                header("Location: ../../partner.php");
                exit(0);
        }
        if(empty($msg)){
            $msg = "I just registered as a partner, and would like to get updates on up coming events. Thanks";
        }

        if(in_array($image_extension, $allowTypes)){
            
            move_uploaded_file($pro_img_temp, '../uploads/profile/'.$filename);

            $query = "INSERT INTO partners (img, fullname, email, phone1, phone2, gender, res_street, res_town, res_state, res_country, orig_street, orig_town, orig_state, orig_country, occupation, pay, code, status, date_created) VALUES ('{$filename}', '{$fullname}', '{$email}', '{$phone1}', '{$phone2}', '{$gender}', '{$res_street}', '{$res_town}', '{$res_state}', '{$res_country}', '{$orig_street}', '{$orig_town}', '{$orig_state}', '{$orig_country}', '{$occupation}', '{$pay}', '{$code}', 'inactive', NOW())";
            
            $run_query = mysqli_query($connection, $query);
            // echo $run_query;
            // exit(0);

            $msg_query = "INSERT INTO message (name, msg_cat, msg_content, msg_status, msg_date) VALUES('{$fullname}', 'PARNTER', 'You have one new Partner', 'unread', NOW())";
            $run_msg_query = mysqli_query($connection, $msg_query);

            if(!$run_query){
                die("QUERY FAILED ". mysqli_error($connection) . ' ' . mysqli_errno($connection));
            }
            $_SESSION['message'] = "Registeration Successfully!!!";
            header("Location: ../../partner.php");
            exit(0);    
        }else{
            $_SESSION['error'] = "Sorry, only JPG, JPEG & PNG files are allowed to upload!!!";
            header("Location: ../../partner.php");
            exit(0); 
        }
        
    }else{
         $_SESSION['error'] = "No Field Should be EMPTY!!!";
        header("Location: ../../partner.php");
        exit(0);
    }
 
}



// ADMIN DASHBOARD CODES
//About Section---------------------------------------------------------------------------------
if(isset($_POST['about_btn'])){
    
    $about_topic = mysqli_real_escape_string($connection, $_POST['about_topic']);
    $write_up = mysqli_real_escape_string($connection, $_POST['write_up']);

    $about_topic =  validate_input_value($about_topic);
    $write_up =  validate_input_value($write_up);

    if(empty($about_topic) || empty($write_up)){
        $_SESSION['error'] = "No Field Should be EMPTY!!!";
        header("Location: ../about.php");
        exit(0);
    }
    $check_about = "SELECT abt_cat FROM about WHERE abt_cat = '$about_topic'";
    $run_check_about = mysqli_query($connection, $check_about);

    if(mysqli_num_rows($run_check_about) > 0) {
        $_SESSION['error'] = "Already Exist, Try Updating It!!";
        header("Location: ../about.php");
        exit(0);
    }

    $query = "INSERT INTO about (abt_cat, abt_writeup) VALUES ('{$about_topic}', '{$write_up}')";	
    $run_query = mysqli_query($connection,$query);

    if(!$run_query){
        die("QUERY FAILED ". mysqli_error($connection) . ' ' . mysqli_errno($connection));
    }
    $_SESSION['message'] = strtoupper($about_topic) . " " . "Updated Successfully!!!";
    header("Location: ../about.php");
    exit(0);    
}


// Updating About 
if(isset($_POST['update_about_btn'])){
    
    $id = $_POST['update_id'];
    $update_about_topic = mysqli_real_escape_string($connection, $_POST['update_about_topic']);
    $update_write_up = mysqli_real_escape_string($connection, $_POST['update_write_up']);

    $update_about_topic =  validate_input_value($update_about_topic);
    $update_write_up =  validate_input_value($update_write_up);

    if(empty($update_about_topic) || empty($update_write_up)){
        $_SESSION['error'] = "Didn't Update, An Input field is EMPTY!!!";
        header("Location: ../about.php");
        exit(0);
    }

    $update_query = "UPDATE about SET abt_cat = '{$update_about_topic}', abt_writeup = '{$update_write_up}' WHERE id = '{$id}'";
    $run_update_query = mysqli_query($connection, $update_query);

    if(!$run_update_query){
        die("QUERY FAILED ." .mysqli_error($connection));
    }
    $_SESSION['message'] = "About Updated Successfully";
    header("Location: ../about.php");
    exit(0);
}



//delete about
if(isset($_GET['del'])){
    
     $id = $_GET['del'];

    //  echo $id;
    //  exit(0);
     $del_query = "DELETE FROM about WHERE id = '$id' ";
     $run_del_query = mysqli_query($connection, $del_query);

     if(!$run_del_query){
        die("QUERY FAILED ." .mysqli_error($connection));
    }
    $_SESSION['message'] = "Deleted Successfully";
    header("Location: ../about.php");
    exit(0);
    
}



//Program Section-------------------------------------------------------- 
if(isset($_POST['pro_btn'])){

     $pro_heading = mysqli_real_escape_string($connection, $_POST['pro_heading']);
     $pro_details = mysqli_real_escape_string($connection, $_POST['pro_details']);
     
     $pro_heading =  validate_input_value($pro_heading);
     $pro_details =  validate_input_value($pro_details);

    $pro_img = $_FILES['pro_img']['name'];
    $pro_img_temp = $_FILES['pro_img']['tmp_name'];
    
    $image_extension = pathinfo($pro_img, PATHINFO_EXTENSION);
       
    $filename = preg_replace('/\s+/', '', (strtolower($pro_heading))) .'.'. $image_extension;
    $allowTypes = array('jpg','png','jpeg','gif', 'JPG', 'JPEG', 'PNG');  

     if(empty($pro_heading) || empty($pro_details) || empty($filename)){
        
        $_SESSION['error'] = "Check Out for Empty Inputs!";
        header("Location: ../program.php");
        exit(0);
        
     }else{
        
         if(in_array($image_extension, $allowTypes)){
            
            move_uploaded_file($pro_img_temp, '../uploads/program/'. $filename);            
            
            $pro_query = "INSERT INTO program (pro_title, pro_pic, pro_writeup) VALUES ('$pro_heading', '$filename', '$pro_details')";
            $run_pro_query = mysqli_query($connection, $pro_query);

            if(!$run_pro_query){
                die("QUERY FAILED ." .mysqli_error($connection));
            }
            
            $_SESSION['message'] = "Program Added Successfully";
            header("Location: ../program.php");
            exit(0);

        }else{
            
            $_SESSION['error'] = "Sorry, only JPG, JPEG & PNG files are allowed to upload!!!";
            header("Location: ../program.php");
            exit(0);
            
        }

     }
}

//delete program
if(isset($_GET['pro_del'])){
    
     $id = $_GET['pro_del'];

    $get_img = "SELECT pro_pic FROM program WHERE id = '$id' ";
    $run_get_img = mysqli_query($connection, $get_img);

    while($row = mysqli_fetch_assoc($run_get_img)){
        $img = $row['pro_pic'];
        
        if(file_exists('../uploads/program/'.$img)){
            unlink('../uploads/program/'.$img);
        }

    } 
    
    
     $del_query = "DELETE FROM program WHERE id = '$id' ";
     $run_del_query = mysqli_query($connection, $del_query);

    

     if(!$run_del_query){
        die("QUERY FAILED ." .mysqli_error($connection));
    }
    $_SESSION['message'] = "Program Deleted Successfully";
    header("Location: ../program.php");
    exit(0);
    
}

// Update program
if(isset($_POST['update_pro_btn'])){

    $update_id = mysqli_real_escape_string($connection, $_POST['update_id']);
    $update_pro_heading = mysqli_real_escape_string($connection, $_POST['pro_heading']);
    $update_pro_details = mysqli_real_escape_string($connection, $_POST['pro_details']);
     
    $update_pro_heading =  validate_input_value($update_pro_heading);
    $update_pro_details =  validate_input_value($update_pro_details);

    
    $old_filename = $_POST['pro_old_img']; 
    $new_img = $_FILES['pro_img']['name']; 
    
    $update_filename = "";

    $allowTypes = array('jpg','png','jpeg','gif');  

    if($new_img == NULL){
        
        // $first_image  = $_FILES['pro_old_img']['name'];       
        $update_filename = $old_filename;
        
    }else{       

        //Rename this image
        $update_image_extension = pathinfo($new_img, PATHINFO_EXTENSION);
        $filename =  preg_replace('/\s+/', '', (strtolower($update_pro_heading))).'.'. $update_image_extension;

        $update_filename = $filename;
        
        if(in_array($update_image_extension, $allowTypes)){
            
            if(file_exists('../uploads/program/'.$old_filename)){
                unlink('../uploads/program/'.$old_filename);
            }
            move_uploaded_file($_FILES['pro_img']['tmp_name'], '../uploads/program/'.$update_filename);   
            
        }else{
        
            $_SESSION['error'] = "Sorry, only JPG, JPEG & PNG files are allowed to upload!!!";
            header("Location: ../program.php");
            exit(0);
            
        } 
        
    }    

    $update_query = "UPDATE program SET  pro_title = '{$update_pro_heading}', pro_pic = '{$update_filename}', pro_writeup = '{$update_pro_details}' WHERE id ='$update_id'";
    // echo  $update_query;
    // exit(0);
    $run_update_query = mysqli_query($connection, $update_query);

    if(!$run_update_query){
        die("QUERY FAILED ." .mysqli_error($connection));
    }
    $_SESSION['message'] = "Program Updated Successfully";
    header("Location: ../program.php");
    exit(0);

}

// Setting a partner's status to ACTIVE 
 if(isset($_GET['active'])){
    $act_id = $_GET['active'];

    $squery = "SELECT fullname FROM partners WHERE id = '$act_id'";
    $srun_query = mysqli_query($connection, $squery);
    
    while($row = mysqli_fetch_assoc($srun_query)){
        $fullname = $row['fullname'];
    }
    
    
    $actquery = "UPDATE partners SET status = 'active' WHERE id = $act_id";
    $run_actquery = mysqli_query($connection, $actquery);
    
    if(!$run_actquery){
        die("QUERY FAILED ". mysqli_error($connection) . ' ' . mysqli_errno($connection));
    }
                                            
    $_SESSION['message'] = $fullname . " Status has change to Active!!!";
    header("Location: ../partners.php");
    exit(0);
}
// Setting a partner's status to DEACTIVE 
 if(isset($_GET['deactive'])){
    $act_id = $_GET['deactive'];

    $squery = "SELECT fullname FROM partners WHERE id = '$act_id'";
    $srun_query = mysqli_query($connection, $squery);
    
    while($row = mysqli_fetch_assoc($srun_query)){
        $fullname = $row['fullname'];
    }
    
    
    $actquery = "UPDATE partners SET status = 'inactive' WHERE id = $act_id";
    $run_actquery = mysqli_query($connection, $actquery);
    
    if(!$run_actquery){
        die("QUERY FAILED ". mysqli_error($connection) . ' ' . mysqli_errno($connection));
    }
                                            
    $_SESSION['message'] = $fullname . " Status has change to Inactive!!!";
    header("Location: ../partners.php");
    exit(0);
}


// delete partner 
if(isset($_GET['del_pat'])){
    
     $id = $_GET['del_pat'];

    $get_img = "SELECT img FROM partners WHERE id = '$id' ";
    $run_get_img = mysqli_query($connection, $get_img);

    while($row = mysqli_fetch_assoc($run_get_img)){
        $img = $row['img'];
        
        if(file_exists('../uploads/profile/'.$img)){
            unlink('../uploads/profile/'.$img);
        }

    } 
    
    
     $del_query = "DELETE FROM partners WHERE id = '$id' ";
     $run_del_query = mysqli_query($connection, $del_query);

    

     if(!$run_del_query){
        die("QUERY FAILED ." .mysqli_error($connection));
    }
    $_SESSION['message'] = "Partner Deleted Successfully";
    header("Location: ../partners.php");
    exit(0);
    
}

// updating a partner 
if(isset($_POST["update_partner_btn"])){
    
    $fullname = mysqli_real_escape_string($connection, $_POST['fullname']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $gender = mysqli_real_escape_string($connection, $_POST['gender']);
    $phone1 = mysqli_real_escape_string($connection, $_POST['phone1']);
    $phone2 = mysqli_real_escape_string($connection, $_POST['phone2']);
    $res_street = mysqli_real_escape_string($connection, $_POST['res_street']);
    $res_town = mysqli_real_escape_string($connection, $_POST['res_town']);
    $res_state = mysqli_real_escape_string($connection, $_POST['res_state']);
    $res_country = mysqli_real_escape_string($connection, $_POST['res_country']);
    $orig_street = mysqli_real_escape_string($connection, $_POST['orig_street']);
    $orig_town = mysqli_real_escape_string($connection, $_POST['orig_town']);
    $orig_state = mysqli_real_escape_string($connection, $_POST['orig_state']);
    $orig_country = mysqli_real_escape_string($connection, $_POST['orig_country']);
    $occupation = mysqli_real_escape_string($connection, $_POST['occupation']);
    $pay = mysqli_real_escape_string($connection, $_POST['pay']);
    $code = $_POST['code'];
    // $code = mysqli_real_escape_string($connection, $_POST['code']);
    $status = mysqli_real_escape_string($connection, $_POST['status']);

    

    
    $fullname =  validate_input_value($fullname);
    $email = validate_input_email($email);
    // $code = validate_input_value($code);
    $phone1 = validate_input_value($phone1);
    $phone2 = validate_input_value($phone2);
    $res_street = validate_input_value($res_street);
    $res_town = validate_input_value($res_town);
    $res_state = validate_input_value($res_state);
    $res_country = validate_input_value($res_country);
    $orig_street = validate_input_value($orig_street);
    $orig_town = validate_input_value($orig_town);
    $orig_state = validate_input_value($orig_state);
    $orig_country = validate_input_value($orig_country);
    $occupation = validate_input_value($occupation);
    $pay = validate_input_value($pay);

    $id = mysqli_real_escape_string($connection, $_POST['id']);

    $img_query = "SELECT img FROM partners WHERE id = '$id'";
    $run_img_query = mysqli_query($connection, $img_query);
    while($row = mysqli_fetch_assoc($run_img_query)){
        $old_filename = $row['img'];
    }

    $old_filename = $_POST['pat_update_img']; 
    $new_img = $_FILES['new_img']['name']; 
    
    $update_filename = "";

    $allowTypes = array('jpg','png','jpeg','gif');  

    if($new_img == NULL){
        
        // $first_image  = $_FILES['pro_old_img']['name'];       
        $update_filename = $old_filename;
        
    }else{       

        //Rename this image
        $update_image_extension = pathinfo($new_img, PATHINFO_EXTENSION);
        $filename =  preg_replace('/\s+/', '', (strtolower($email))).'.'. $update_image_extension;

        $update_filename = $filename;
        
        if(in_array($update_image_extension, $allowTypes)){
            
            if(file_exists('../uploads/profile/'.$old_filename)){
                unlink('../uploads/profile/'.$old_filename);
            }
            move_uploaded_file($_FILES['new_img']['tmp_name'], '../uploads/profile/'.$update_filename);   
            
        }else{
        
            $_SESSION['error'] = "Sorry, only JPG, JPEG & PNG files are allowed to upload!!!";
            header("Location: ../partners.php");
            exit(0);
            
        } 
        
    }    
    

    $update_query = "UPDATE partners SET  img = '{$update_filename}', fullname = '{$fullname}', email = '{$email}', gender = '{$gender}', phone1 = '{$phone1}', phone2 = '{$phone2}', res_street = '{$res_street}', res_town = '{$res_town}', res_state = '{$res_state}', res_country = '{$res_country}', orig_street = '{$orig_street}', orig_town = '{$orig_town}', orig_state = '{$orig_state}', orig_country = '{$orig_country}', occupation = '{$occupation}', pay = '{$pay}', code = '{$code}', status = '{$status}' WHERE id ='$id'";
    // echo  $update_query;
    // exit(0);
    $run_update_query = mysqli_query($connection, $update_query);

    if(!$run_update_query){
        die("QUERY FAILED ." .mysqli_error($connection));
    }
    $_SESSION['message'] = "Partner Profile Updated Successfully";
    header("Location: ../partners.php");
    exit(0);
 
}


// partner from admin dashboard
if(isset($_POST["addpart_btn"])){
    
    $fullname = mysqli_real_escape_string($connection, $_POST['fullname']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $gender = mysqli_real_escape_string($connection, $_POST['gender']);
    $phone1 = mysqli_real_escape_string($connection, $_POST['phone1']);
    $phone2 = mysqli_real_escape_string($connection, $_POST['phone2']);
    $res_street = mysqli_real_escape_string($connection, $_POST['res_street']);
    $res_town = mysqli_real_escape_string($connection, $_POST['res_town']);
    $res_state = mysqli_real_escape_string($connection, $_POST['res_state']);
    $res_country = mysqli_real_escape_string($connection, $_POST['res_country']);
    $orig_street = mysqli_real_escape_string($connection, $_POST['orig_street']);
    $orig_town = mysqli_real_escape_string($connection, $_POST['orig_town']);
    $orig_state = mysqli_real_escape_string($connection, $_POST['orig_state']);
    $orig_country = mysqli_real_escape_string($connection, $_POST['orig_country']);
    $occupation = mysqli_real_escape_string($connection, $_POST['occupation']);
    $pay = mysqli_real_escape_string($connection, $_POST['pay']);

    
    $fullname =  validate_input_value($fullname);
    $email = validate_input_email($email);
    $code = 002;
    $phone1 = validate_input_value($phone1);
    $phone2 = validate_input_value($phone2);
    $res_street = validate_input_value($res_street);
    $res_town = validate_input_value($res_town);
    $res_state = validate_input_value($res_state);
    $res_country = validate_input_value($res_country);
    $orig_street = validate_input_value($orig_street);
    $orig_town = validate_input_value($orig_town);
    $orig_state = validate_input_value($orig_state);
    $orig_country = validate_input_value($orig_country);
    $occupation = validate_input_value($occupation);
    $pay = validate_input_value($pay);

    $pro_img = $_FILES['upload_profile']['name'];
    $pro_img_temp = $_FILES['upload_profile']['tmp_name'];
    
    $image_extension = pathinfo($pro_img, PATHINFO_EXTENSION);
       
    $filename = $email .'.'. $image_extension;
    $allowTypes = array('jpg','png','jpeg','gif');    



    if(!empty($pro_img) || !empty($fullname) || !empty($email) || !empty($gender) || !empty($phone1) || !empty($res_street) || !empty($res_town) || !empty($res_state) || !empty($res_country) || !empty($orig_street) || !empty($orig_town) || !empty($orig_state) || !empty($orig_country) || !empty($occupation) || !empty($pay)){

        $checkemail = "SELECT email FROM partners WHERE email = '$email'";
        $checkemail_run = mysqli_query($connection, $checkemail);

        if(mysqli_num_rows($checkemail_run) > 0){
            //Already email exist
            $_SESSION['error'] = "User Already Registered as a Partner!!";
                header("Location: ../partners.php");
                exit(0);
        }

        if(in_array($image_extension, $allowTypes)){
            
            move_uploaded_file($pro_img_temp, '../uploads/profile/'.$filename);

            $query = "INSERT INTO partners (img, fullname, email, phone1, phone2, gender, res_street, res_town, res_state, res_country, orig_street, orig_town, orig_state, orig_country, occupation, pay, code, status, date_created) VALUES ('{$filename}', '{$fullname}', '{$email}', '{$phone1}', '{$phone2}', '{$gender}', '{$res_street}', '{$res_town}', '{$res_state}', '{$res_country}', '{$orig_street}', '{$orig_town}', '{$orig_state}', '{$orig_country}', '{$occupation}', '{$pay}', '{$code}', 'inactive', NOW())";
            
            $run_query = mysqli_query($connection, $query);
            // echo $run_query;
            // exit(0);

            $msg_query = "INSERT INTO message (name, msg_cat, msg_content, msg_status, msg_date) VALUES('{$fullname}', 'PARNTER', 'You have one new Partner', 'unread', NOW())";
            $run_msg_query = mysqli_query($connection, $msg_query);

            if(!$run_query){
                die("QUERY FAILED ". mysqli_error($connection) . ' ' . mysqli_errno($connection));
            }
            $_SESSION['message'] = "Registeration Successfully!!!";
            header("Location: ../partners.php");
            exit(0);    
        }else{
            $_SESSION['error'] = "Sorry, only JPG, JPEG & PNG files are allowed to upload!!!";
            header("Location: ../partners.php");
            exit(0); 
        }
        
    }else{
         $_SESSION['error'] = "No Field Should be EMPTY!!!";
        header("Location: ../partners.php");
        exit(0);
    }
 
}

// delete volunteer 
if(isset($_GET['del_vol'])){
    
     $id = $_GET['del_vol'];

     $del_query = "DELETE FROM volunteers WHERE id = '$id' ";
     $run_del_query = mysqli_query($connection, $del_query);

    

     if(!$run_del_query){
        die("QUERY FAILED ." .mysqli_error($connection));
    }
    $_SESSION['message'] = "Volunteer Deleted Successfully";
    header("Location: ../volunteers.php");
    exit(0);
    
}

// Add a New Volunteer 
if(isset($_POST["add_vol_btn"])){
    $fullname = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $gender = mysqli_real_escape_string($connection, $_POST['gender']);
    $address = mysqli_real_escape_string($connection, $_POST['address']);
    $msg = mysqli_real_escape_string($connection, $_POST['message']);


    
    $fullname = validate_input_value($fullname);
    $email = validate_input_email($email);
    $phone = validate_input_value($phone);
    $gender = validate_input_value($gender);
    $address = validate_input_value($address);
    $msg = validate_input_value($msg);


    if(empty($fullname) || empty($email) || empty($phone) || empty($gender) || empty($address)){
        $_SESSION['error'] = "Fill the neccessary inputs!!!";
        header("Location: ../volunteer.php");
        exit(0);
    } 
    
    if(!$email){
        $_SESSION['error'] = "E-mail address not correct!!!";
        header("Location: ../volunteer.php");
        exit(0);
    }

    $checkemail = "SELECT vol_email, vol_phone FROM volunteers WHERE vol_email = '$email' AND vol_phone = '$phone'";
    $checkemail_run = mysqli_query($connection, $checkemail);

    if(mysqli_num_rows($checkemail_run) > 0){
        //Already email exist
        $_SESSION['error'] = "Volunteered Already Exist!!";
            header("Location: ../volunteers.php");
            exit(0);
    }
    if(empty($msg)){
        $msg = "I just volunteered and would like to get updates on up coming events. Thanks";
    }

    $query = "INSERT INTO volunteers (vol_name, vol_email, vol_phone, gender, vol_address, vol_msg, vol_date) VALUES ('{$fullname}', '{$email}', '{$phone}', '{$gender}', '{$address}', '{$msg}', NOW())";
        $run_query = mysqli_query($connection, $query);

        $msg_query = "INSERT INTO message (name, msg_cat, msg_content, msg_status, msg_date) VALUES('{$fullname}', 'Volunteer', 'You have one new Volunteer', 'unread', NOW())";
         $run_msg_query = mysqli_query($connection, $msg_query);
        
        if(!$run_query){
            die("QUERY FAILED ". mysqli_error($connection) . ' ' . mysqli_errno($connection));
        }
        $_SESSION['message'] = "Registeration Successfully!!!";
        header("Location: ../volunteers.php");
        exit(0);    
}



//update a volunteer
if(isset($_POST["up_vol_btn"])){
    $id = mysqli_real_escape_string($connection, $_POST['id']);
    $fullname = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $gender = mysqli_real_escape_string($connection, $_POST['gender']);
    $address = mysqli_real_escape_string($connection, $_POST['address']);
    $msg = mysqli_real_escape_string($connection, $_POST['message']);


    if(empty($fullname) || empty($email) || empty($phone) || empty($gender) || empty($address)){
        $_SESSION['error'] = "Fill the neccessary inputs!!!";
        header("Location: ../volunteer.php");
        exit(0);
    } 
    
    if(!$email){
        $_SESSION['error'] = "E-mail address not correct!!!";
        header("Location: ../volunteer.php");
        exit(0);
    }
    if(empty($msg)){
        $msg = "I just volunteered and would like to get updates on up coming events. Thanks";
    }

    $update_vol = "UPDATE volunteers SET vol_name = '{$fullname}', vol_email = '{$email}', vol_phone = '{$phone}', gender = '{$gender}', vol_address = '{$address}', vol_msg = '{$msg}' WHERE id = '{$id}'";
    $run_update = mysqli_query($connection, $update_vol);

    if(!$run_update){
        die("QUERY FAILED ". mysqli_error($connection) . ' ' . mysqli_errno($connection));
    }
    $_SESSION['message'] = "Volunteer Registered Successfully!!!";
    header("Location: ../volunteers.php");
    exit(0); 
}


//add phone number
if(isset($_POST['add_phone_btn'])){
    $phone = mysqli_real_escape_string($connection, $_POST['add_phone']);

     if(empty($phone)){
        $_SESSION['error'] = "Phone Number input Can't be EMPTY!!!";
        header("Location: ../contact.php");
        exit(0);
    } 
    
    $check_num = "SELECT * FROM phone WHERE con_phone = '{$phone}' ";
    $run_check_num = mysqli_query($connection, $check_num);
    
    if(mysqli_num_rows($run_check_num) > 0){
        $_SESSION['error'] = "Phone Number Already EXIST!!!";
        header("Location: ../contact.php");
        exit(0);
    }
    
    $query = "INSERT INTO phone (con_phone) VALUES ('{$phone}')";
    $run_query = mysqli_query($connection, $query);
    if(!$run_query){
        die("QUERY FAILED ". mysqli_error($connection) . ' ' . mysqli_errno($connection));
    }
    $_SESSION['message'] = "Phone Number Added Successfully!!!";
    header("Location: ../contact.php");
    exit(0);
    
}

//add email address
if(isset($_POST['add_email_btn'])){
    $email = mysqli_real_escape_string($connection, $_POST['add_email']);

     if(empty($email)){
        $_SESSION['error'] = "Email Address input Can't be EMPTY!!!";
        header("Location: ../contact.php");
        exit(0);
    } 
    
    $check_email = "SELECT * FROM email WHERE con_email = '{$email}' ";
    $run_check_email = mysqli_query($connection, $check_email);
    
    if(mysqli_num_rows($run_check_email) > 0){
        $_SESSION['error'] = "Email Address Already EXIST!!!";
        header("Location: ../contact.php");
        exit(0);
    }
    
    $query = "INSERT INTO email (con_email) VALUES ('{$email}')";
    $run_query = mysqli_query($connection, $query);
    if(!$run_query){
        die("QUERY FAILED ". mysqli_error($connection) . ' ' . mysqli_errno($connection));
    }
    $_SESSION['message'] = "Email Address Added Successfully!!!";
    header("Location: ../contact.php");
    exit(0);
    
}


// delete contact phone  
if(isset($_GET['idphone'])){
    
     $id = $_GET['idphone'];

     $del_query = "DELETE FROM phone WHERE id = '$id' ";
     $run_del_query = mysqli_query($connection, $del_query);

    

     if(!$run_del_query){
        die("QUERY FAILED ." .mysqli_error($connection));
    }
    $_SESSION['message'] = "Phone Number Deleted Successfully";
    header("Location: ../contact.php");
    exit(0);
    
}
// delete contact email  
if(isset($_GET['idemail'])){
    
     $id = $_GET['idemail'];

     $del_query = "DELETE FROM email WHERE id = '$id' ";
     $run_del_query = mysqli_query($connection, $del_query);

    

     if(!$run_del_query){
        die("QUERY FAILED ." .mysqli_error($connection));
    }
    $_SESSION['message'] = "E-mail Address Deleted Successfully";
    header("Location: ../contact.php");
    exit(0);
    
}


//add account number
if(isset($_POST['add_bank_btn'])){
    $bankName = mysqli_real_escape_string($connection, $_POST['bank_name']);
    $acctName = mysqli_real_escape_string($connection, $_POST['acct_name']);
    $acctNum = mysqli_real_escape_string($connection, $_POST['acct_num']);
    $acctTyp = mysqli_real_escape_string($connection, $_POST['bank_type']);


    if(empty($bankName) || empty($acctName) || empty($acctNum) || empty($acctTyp)){
        $_SESSION['error'] = "Fill the neccessary inputs!!!";
        header("Location: ../account_details.php");
        exit(0);
    }
    
    $query = "INSERT INTO account (bank_name, acct_name, acct_number, acct_type, acct_date) VALUES ('{$bankName}', '{$acctName}', '{$acctNum}', '{$acctTyp}', NOW())";
    $run_query = mysqli_query($connection, $query);

    if(!$run_query){
        die("QUERY FAILED ." .mysqli_error($connection));
    }
    $_SESSION['message'] = "Account Number Added Successfully";
    header("Location: ../account_details.php");
    exit(0);   
    
}

if(isset($_POST['update_bank_btn'])){
    $id = mysqli_real_escape_string($connection, $_POST['update_id']);
    $bankName = mysqli_real_escape_string($connection, $_POST['ubank_name']);
    $acctName = mysqli_real_escape_string($connection, $_POST['uacct_name']);
    $acctNum = mysqli_real_escape_string($connection, $_POST['uacct_num']);
    $acctTyp = mysqli_real_escape_string($connection, $_POST['ubank_type']);
    
    if(empty($bankName) || empty($acctName) || empty($acctNum) || empty($acctTyp)){
        $_SESSION['error'] = "Didn't Update, An Input field is EMPTY!!!";
        header("Location: ../account_details.php");
        exit(0);
    }

    $update_query = "UPDATE account SET bank_name = '{$bankName}', acct_name = '{$acctName}', acct_number = '{$acctNum}', acct_type ='{$acctTyp}' WHERE id ='{$id}' ";
    $run_update_query = mysqli_query($connection, $update_query);
    if(!$run_update_query){
        die("QUERY FAILED ." .mysqli_error($connection));
    }
    $_SESSION['message'] = "Account Number Updated Successfully";
    header("Location: ../account_details.php");
    exit(0); 

}

// delete account detail  
if(isset($_GET['del_acct'])){
    
     $id = $_GET['del_acct'];

     $del_query = "DELETE FROM account WHERE id = '$id' ";
     $run_del_query = mysqli_query($connection, $del_query);

    

     if(!$run_del_query){
        die("QUERY FAILED ." .mysqli_error($connection));
    }
    $_SESSION['message'] = "Account Detail Deleted Successfully";
    header("Location: ../account_details.php");
    exit(0);
    
}

// add social media handles 
if(isset($_POST['social_btn'])){
    $handle = mysqli_real_escape_string($connection, $_POST['handle']);
    $url = mysqli_real_escape_string($connection, $_POST['url']);

     if(empty($handle) || empty($url)){
        $_SESSION['error'] = "Input field is EMPTY!!!";
        header("Location: ../social_account.php");
        exit(0);
    }
    
    
    $check = "SELECT * FROM social_media WHERE social_name = '$handle'";
    $run_check = mysqli_query($connection, $check);

    if(mysqli_num_rows($run_check) > 0) {
        $_SESSION['error'] = "Already Exist, Try Updating It!!";
        header("Location: ../social_account.php");
        exit(0);
    }

    
    $query = "INSERT INTO social_media (social_name, social_url) VALUES ('{$handle}', '{$url}')";
    $run_query = mysqli_query($connection, $query);

    if(!$run_query){
        die("QUERY FAILED ." .mysqli_error($connection));
    }
    $_SESSION['message'] = "Social Media Handle Added Successfully";
    header("Location: ../social_account.php");
    exit(0);
    
}

// delete social media detail  
if(isset($_GET['del_sol'])){
    
     $id = $_GET['del_sol'];

     $del_query = "DELETE FROM social_media WHERE id = '$id' ";
     $run_del_query = mysqli_query($connection, $del_query);

    

     if(!$run_del_query){
        die("QUERY FAILED ." .mysqli_error($connection));
    }
    $_SESSION['message'] = "Social Media Handle Deleted Successfully";
    header("Location: ../social_account.php");
    exit(0);
    
}

if(isset($_POST['found_btn'])){
    $name = mysqli_real_escape_string($connection, $_POST['found_name']);
    $title = mysqli_real_escape_string($connection, $_POST['found_title']);
    $bio = mysqli_real_escape_string($connection, $_POST['found_writeup']);
    
    $found_img = $_FILES['found_img']['name'];
    $found_img_temp = $_FILES['found_img']['tmp_name'];
    
    $image_extension = pathinfo($found_img, PATHINFO_EXTENSION);
    
    $filename = $name .'.'. $image_extension;
    $allowTypes = array('jpg','png','jpeg','gif');
    
    if(empty($name) || empty($title) || empty($found_img) || empty($bio)){
        $_SESSION['error'] = "Fill Empty Input!!!";
        header("Location: ../founder.php");
        exit(0);
    }
    
    if(in_array($image_extension, $allowTypes)){
          
        move_uploaded_file($found_img_temp, '../uploads/founder/'.$filename);
    
        $query = "INSERT INTO founder (found_name, found_title, found_pic, found_about) VALUES ('{$name}', '{$title}', '{$filename}', '{$bio}')";
        $run_query = mysqli_query($connection, $query);
    
        if(!$run_query){
            die("QUERY FAILED ." .mysqli_error($connection));
        }
        
        $_SESSION['message'] = "Founder Bio Uploaded Successfully";
        header("Location: ../founder.php");
        exit(0);
        
    }else{
        
        $_SESSION['error'] = "Sorry, only JPG, JPEG & PNG files are allowed to upload!!!";
        header("Location: ../partners.php");
        exit(0); 
        
    }    

}


if(isset($_POST['update_found'])){
    $name = mysqli_real_escape_string($connection, $_POST['uname']);
    $title = mysqli_real_escape_string($connection, $_POST['utitle']);
    $details = mysqli_real_escape_string($connection, $_POST['details']);
    
    $old_img = $_POST['old_img']; 
    $new_img = $_FILES['new_img']['name']; 

    $update_filename = "";

    $allowTypes = array('jpg','png','jpeg','gif');  

    if($new_img == NULL){
        // $first_image  = $_FILES['pro_old_img']['name'];       
        $update_filename = $old_img;
        
    }else{       

        //Rename this image
        $update_image_extension = pathinfo($new_img, PATHINFO_EXTENSION);
        $filename =  preg_replace('/\s+/', '', (strtolower($name))).'.'. $update_image_extension;

        $update_filename = $filename;
        
        if(in_array($update_image_extension, $allowTypes)){
            
            if(file_exists('../uploads/founder/'.$old_img)){
                unlink('../uploads/founder/'.$old_img);
            }
            move_uploaded_file($_FILES['new_img']['tmp_name'], '../uploads/founder/'.$update_filename);   
            
        }else{
        
            $_SESSION['error'] = "Sorry, only JPG, JPEG & PNG files are allowed to upload!!!";
            header("Location: ../founder.php");
            exit(0);            
        }        
    }    
				
    $update_query = "UPDATE founder SET  found_name = '{$name}', found_title = '{$title}', found_pic = '{$update_filename}', found_about = '{$details}'";
   
    $run_update_query = mysqli_query($connection, $update_query);

    if(!$run_update_query){
        die("QUERY FAILED ." .mysqli_error($connection));
    }
    $_SESSION['message'] = "Founder Profile Updated Successfully";
    header("Location: ../founder.php");
    exit(0);
}


//delete founder 
if(isset($_GET['del_found'])){
    
     $id = $_GET['del_found'];

    $get_founder = "SELECT * FROM founder WHERE id = '$id' ";
    $run_get_founder = mysqli_query($connection, $get_founder);

    while($row = mysqli_fetch_assoc($run_get_founder)){
        $img = $row['found_pic'];
        
        if(file_exists('../uploads/founder/'.$img)){
            unlink('../uploads/founder/'.$img);
        }

    } 
    
    
     $del_query = "DELETE FROM founder WHERE id = '$id' ";
     $run_del_query = mysqli_query($connection, $del_query);

    

     if(!$run_del_query){
        die("QUERY FAILED ." .mysqli_error($connection));
    }
    $_SESSION['message'] = "Founder Deleted Successfully";
    header("Location: ../founder.php");
    exit(0);
    
}

?>