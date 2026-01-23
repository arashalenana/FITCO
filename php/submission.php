<?php
    include("connection.php");
    if(isset($_POST["submit_button"]))
    {
        $name = $_POST["person_name"];
        $email = $_POST["person_email"];
        $phone = $_POST["person_number"];

        $sql="select * from fitco where name='$name'";
        $result = mysqli_query($conn, $sql);
        $count_name = mysqli_num_rows($result);

        
        $sql="select * from fitco where email='$email'";
        $result = mysqli_query($conn, $sql);
        $count_email = mysqli_num_rows($result);

        if($count_email==0) {
          echo "<script>
                window.location.href='contact.php';
                alert('Submission successful!');
                </script>";
            $sql = "insert into fitco(name,email,phone) values('$name','$email','$phone')";
             $result = mysqli_query($conn, $sql);
             if($result) {
             header("Location: view_submissions.php");
             }
        }
        else {
            if($count_email>0){
                echo "<script>
                window.location.href='contact.php';
                alert('Submission fail!');
                </script>";
            }
        }
            
    }

?>