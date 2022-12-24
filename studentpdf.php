<?php
    
    require_once './fpdf.php';
    $conn = mysqli_connect("localhost","root","","kiit");
    //check connection
    if ($conn == false) {
         die("Connection failed: " . mysqli_connect_error());
         } 

    
    $sql = "SELECT * FROM student";
    $data = mysqli_query($conn,$sql);
    
    

  if (!$data){
        
        $message = " Error. \\n Check your connection to the database.\\n";
    
          echo "<script type='text/javascript'>alert('$message')</script>";
          include "dashbord_admin.php";
        
    }
    else{
    $pdf = new FPDF('P','mm', 'A4');
    $pdf->SetFont('Arial', 'B','9');
    $pdf->AddPage();
    $pdf->Cell('40','10','Students in KENYA INSTITUTE','0','2','c');
    $pdf->cell('25','10','ID','1','0','c');
    $pdf->cell('35','10','Email','1','0','c');
    $pdf->cell('25','10','First name','1','0','c');
    $pdf->cell('25','10','Last name','1','0','c');
    $pdf->cell('30','10','Phone number','1','0','c');
    $pdf->cell('15','10','Gender','1','0','c');
    $pdf->cell('20','10','Country','1','0','c');
    $pdf->cell('20','10','kcse','1','1','c');
    
    $pdf->SetFont('arial', '','7');
    while ($row = mysqli_fetch_assoc($data)) {
       
       $pdf->cell('25','10',$row['id'],'1','0','c');
       $pdf->cell('35','10',$row['email'],'1','0','c');
       $pdf->cell('25','10',$row['first_name'],'1','0','c');
       $pdf->cell('25','10',$row['last_name'],'1','0','c');
       $pdf->cell('30','10',$row['phone_number'],'1','0','c');
       $pdf->cell('15','10',$row['gender'],'1','0','c');
       $pdf->cell('20','10',$row['country'],'1','0','c');
       $pdf->cell('20','10',$row['kcse'],'1','1 ','c');
       
    }
    $pdf->Output();
  }
?>

