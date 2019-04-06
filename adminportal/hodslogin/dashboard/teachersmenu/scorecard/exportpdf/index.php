<?php
require('fpdf.php');
include('../../../../../../db_config.php');
session_start();

class PDF extends FPDF
{
// Page header
function Header()
{
    include('../../../../../../db_config.php');
    // Logo
    $this->Image('../../../../../../images/logo.png',116,7,12);
    // Arial bold 15
    $this->SetFont('Arial','B',20);
    //$this->SetFillColor(200,220,255);
    // Move to the right
    $this->Cell(135);
    // Title
    $this->Cell(27,10,'Feedback Report',0,1,'C');
    // Line break
    $this->Ln(9);
    // Details
    $this->SetFont('Times','',12);
    $this->Cell(0,10,"Teacher's name  : ".$_SESSION["te_username"],0,1);
    $this->Cell(0,10,"Department        : ".$_SESSION["te_dept"],0,1);
    $this->Cell(0,10,"Class                  : ".$_SESSION["class"],0,1);
    $sql = "SELECT overall FROM teachersinfo WHERE te_username = '".$_SESSION["te_username"]."' AND class = '".$_SESSION["class"]."' AND sub_code = '".$_SESSION["sub_code"]."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if($row["overall"] == NULL)
      $overall = "0 %";
    else
      $overall = $row["overall"]."%";
    $this->Cell(0,10,"Overall Rating   : ".$overall,0,1);

    $this->SetY(29);
    $this->SetX(80);
 
    //$pdf->Cell(20,4,$feature_list_item,0,1,L,'');

    $this->Cell(0,10,"Subject name     : ".$_SESSION["sub_name"],0,1);

    $this->SetX(80);
    
    $this->Cell(0,10,"Subject code      : ".$_SESSION["sub_code"],0,1);
    $sql1 = "SELECT COUNT(*) FROM students WHERE  class='".$_SESSION["class"]."'";
    $result1 = $conn->query($sql1);
    if($result1->num_rows > 0) {
      $row1 = $result1->fetch_assoc();
      $strength = $row1["COUNT(*)"]; 
    }

    $this->SetX(80);

    $this->Cell(70,10,"Class strength    : ".$strength,0,1);
    $sql1 = "SELECT COUNT(*) FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
    $result1 = $conn->query($sql1);
    if($result1->num_rows > 0) {
      $row1 = $result1->fetch_assoc();
      $feed_app = $row1["COUNT(*)"]; 
    }

    $this->SetX(80);

    $this->Cell(70,10,"Feed applied      : ".$feed_app,0,1);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','B',9);
    // Org name
    $this->Cell(0,0,'Powered by Feedie',0,1,'C');
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}

}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
// Line break
$pdf->Ln(9);

$width_cell=array(12,156,88,20);
$pdf->SetFont('Arial','B',10);

//Background color of header//
$pdf->SetFillColor(193,229,252);

// Header starts /// 
//First header column //
$pdf->Cell($width_cell[0],10,'No.',1,0,'C',true);
//Second header column//
$pdf->Cell($width_cell[1],10,'Question',1,0,'C',true);
//Third header column//
$pdf->Cell($width_cell[2],10,'Rating',1,0,'C',true); 
//Fourth header column//
$pdf->Cell($width_cell[3],10,'Overall',1,0,'C',true);
// Line break
$pdf->Ln();
//// header ends ///////

// Sub Header starts /// 
$pdf->SetFont('Arial','',9);
//First header column //
$pdf->Cell($width_cell[0],7,'',1,0,'C',true);
//Second header column//
$pdf->Cell($width_cell[1],7,'',1,0,'C',true);
//Third header column//
$pdf->Cell(17.6,7,'Excellent',1,0,'C',true); 
//Third header column//
$pdf->Cell(17.6,7,'Very good',1,0,'C',true);
//Third header column//
$pdf->Cell(17.6,7,'Good',1,0,'C',true);
//Third header column//
$pdf->Cell(17.6,7,'Fair',1,0,'C',true);
//Third header column//
$pdf->Cell(17.6,7,'Poor',1,0,'C',true);
//Fourth header column//
$pdf->Cell($width_cell[3],7,'',1,0,'C',true);
// Line break
$pdf->Ln();
//// header ends ///////

$pdf->SetFont('Arial','',14);
//Background color of header//
$pdf->SetFillColor(235,236,236); 
//to give alternate background fill color to rows// 
$fill=false;

/// each record is one row  ///
/*foreach ($dbo->query($count) as $row) {
$pdf->Cell($width_cell[0],10,$row['id'],1,0,C,$fill);
$pdf->Cell($width_cell[1],10,$row['name'],1,0,L,$fill);
$pdf->Cell($width_cell[2],10,$row['class'],1,0,C,$fill);
$pdf->Cell($width_cell[3],10,$row['mark'],1,0,C,$fill);
$pdf->Cell($width_cell[4],10,$row['sex'],1,1,C,$fill);
//to give alternate background fill  color to rows//
$fill = !$fill;
}*/

$pdf->SetFont('Arial','',11);
$sql1 = "SELECT quest_content, quest_value FROM questions WHERE quest_id != 0 ORDER BY quest_id ASC ";
$result1 = $conn->query($sql1);
$i = 1;
if ($result1->num_rows > 0){
  while ($row1 = $result1->fetch_assoc()){
    $pdf->Cell($width_cell[0],7,$i,1,0,'C',$fill);
    $pdf->Cell($width_cell[1],7,$row1["quest_content"],1,0,'L',$fill);
    
    $q_no = "q".$i;
    $sql2 = " SELECT "."q".$i." FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."' AND sub_code='".$_SESSION["sub_code"]."' AND sub_name='".$_SESSION["sub_name"]."' ";
    $result2 = $conn->query($sql2);
    $count = array(0,0,0,0,0,0);
    $final = 0;
    if($result2->num_rows > 0) {
      while($row2 = $result2->fetch_assoc()){
        if ($row2[$q_no] == 5) {
          $count[5] = $count[5]+1;
        }
        else if ($row2[$q_no] == 4) {
          $count[4] = $count[4]+1;
        }
        else if ($row2[$q_no] == 3) {
          $count[3] = $count[3]+1;
        }
        else if ($row2[$q_no] == 2) {
          $count[2] = $count[2]+1;
        }
        else if ($row2[$q_no] == 1) {
          $count[1] = $count[1]+1;
        } 
      }
    }
    
    $max_mark = 0;
    $k = 1;
    $sql3 = "SELECT r_value FROM ratings ORDER BY r_no";
    $result3 = $conn->query($sql3);
    if($result3->num_rows > 0) {
      while($row3 = $result3->fetch_assoc()){
        $mark[$k] = $row3["r_value"];
        if( $max_mark < $row3["r_value"] ){
          $max_mark = $row3["r_value"];
        } 
        ++$k;
      }
    }

    $sql4 = "SELECT COUNT(*) FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."' AND sub_name='".$_SESSION["sub_name"]."' AND sub_code='".$_SESSION["sub_code"]."' ";
    $result4 = $conn->query($sql4);
    if($result4->num_rows > 0) {
      $row4 = $result4->fetch_assoc();
      $feed_app = $row4["COUNT(*)"]; 
    }

    $max_mark = $max_mark*$feed_app;
    $score = 0;

    for ($j=5; $j > 0; $j--) { 
      $pdf->Cell(17.6,7,$count[$j],1,0,'C',$fill);
      $score = $score + $count[$j]*$mark[$j];
    }

    $overall = ($score/$max_mark)*100;
    $overall = round($overall,2);

    $pdf->Cell($width_cell[3],7,$overall,1,0,'C',true);
    
    $fill = !$fill;
    $pdf->Ln();
    ++$i;
  }
}
$pdf->Output('I',$_SESSION["te_username"]." ".$_SESSION["sub_code"].".pdf");
?>