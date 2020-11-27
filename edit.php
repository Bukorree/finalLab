<?php
        $conn = mysqli_init();
            mysqli_real_connect($conn, 'ihost.it.kmitl.ac.th', 'it63070234', 'SMSylb15', 'it63070234_film', 3306);
            if (mysqli_connect_errno($conn))
            {
                die('Failed to connect to MySQL: '.mysqli_connect_error());
            }

        $id = $_GET['id'];
        $w = $_GET['W'];
        $h = $_GET['H'];
        
        $bmi = ($w)/(($h/100)*($h/100));
        $sql = "UPDATE bmiDB SET weight='$w' , height='$h' , bmi='&bmi' WHERE id=$id";
   
        if (mysqli_query($conn, $sql)) {
    header("location:show.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
        
  
        mysqli_close($conn);
        
?>
