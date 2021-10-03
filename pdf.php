<?php
if(!empty($_POST['Submit']))
{
         $usn=$_POST['usn'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $sub1=$_POST['sub1'];
        $mrk1=$_POST['mrk1'];
        $sub2=$_POST['sub2'];
        $mrk2=$_POST['mrk2'];
        $sub3=$_POST['sub3'];
        $mrk3=$_POST['mrk3'];
        $sub4=$_POST['sub4'];
        $mrk4=$_POST['mrk4'];
        $sub5=$_POST['sub5'];
        $mrk5=$_POST['mrk5'];
        $sub6=$_POST['sub6'];
        $mrk6=$_POST['mrk6'];
        $sub7=$_POST['sub7'];
        $mrk7=$_POST['mrk7'];
        $sub8=$_POST['sub8'];
        $mrk8=$_POST['mrk8'];
        $sub9=$_POST['sub9'];
        $mrk9=$_POST['mrk9'];
        $sub10=$_POST['sub10'];
        $mrk10=$_POST['mrk10'];
        $total=$_POST['total'];

        require("fpdf/fpdf.php");

        $pdf = new FPDF();
        $pdf -> AddPage();

        $pdf -> SetFont("Arial","",16);
        $pdf -> Cell(0,10,"Result Details",1,1,'C');

        $pdf->Cell(36,10,"USN",1,0);
        $pdf->Cell(38,10,"Name",1,0);
        $pdf->Cell(0,10,"Email",1,1);
        $pdf->Cell (36,10,$usn,1,0);
        $pdf->Cell (38,10,$name,1,0);
        $pdf->Cell (0,10,$email,1,1);
        $pdf->Cell(55,10,"Subject 1",1,0);
        $pdf->Cell(55,10,"Marks1",1,1);
        $pdf->Cell (55,10,$sub1,1,0);
        $pdf->Cell (55,10,$mrk1,1,1);
        $pdf->Cell(55,10,"Subject 2",1,0);
        $pdf->Cell(55,10,"Marks 2",1,1);
        $pdf->Cell (55,10,$sub2,1,0);
        $pdf->Cell (55,10,$mrk2,1,1);
        $pdf->Cell(55,10,"Subject 3",1,0);
        $pdf->Cell(55,10,"Marks 3",1,1);
        $pdf->Cell (55,10,$sub3,1,0);
        $pdf->Cell (55,10,$mrk3,1,1);
        $pdf->Cell(55,10,"Subject 4",1,0);
        $pdf->Cell(55,10,"Marks 4",1,1);
        $pdf->Cell (55,10,$sub4,1,0);
        $pdf->Cell (55,10,$mrk4,1,1);
        $pdf->Cell(55,10,"Subject 5",1,0);
        $pdf->Cell(55,10,"Marks 5",1,1);
        $pdf->Cell (55,10,$sub5,1,0);
        $pdf->Cell (55,10,$mrk5,1,1);
        $pdf->Cell(55,10,"Subject 6",1,0);
        $pdf->Cell(55,10,"Marks 6",1,1);
        $pdf->Cell (55,10,$sub6,1,0);
        $pdf->Cell (55,10,$mrk6,1,1);
        $pdf->Cell(55,10,"Subject 7",1,0);
        $pdf->Cell(55,10,"Marks 7",1,1);
        $pdf->Cell (55,10,$sub7,1,0);
        $pdf->Cell (55,10,$mrk7,1,1);
        $pdf->Cell(55,10,"Subject 8",1,0);
        $pdf->Cell(55,10,"Marks 8",1,1);
        $pdf->Cell (55,10,$sub8,1,0);
        $pdf->Cell (55,10,$mrk8,1,1);
        $pdf->Cell(55,10,"Subject 9",1,0);
        $pdf->Cell(55,10,"Marks 9",1,1);
        $pdf->Cell (55,10,$sub9,1,0);
        $pdf->Cell (55,10,$mrk9,1,1);
        $pdf->Cell(55,10,"Subject 10",1,0);
        $pdf->Cell(55,10,"Marks 10",1,1);
        $pdf->Cell (55,10,$sub10,1,0);
        $pdf->Cell (55,10,$mrk10,1,1);
        $pdf->Cell(55,10,"Totak Marks",1,1);
        $pdf->Cell (55,10,$total,1,0);

        
       
        
        $file=time().'.pdf';
       
        
        
        
    
        $pdf -> output($file,'D');
        
      
}
?>