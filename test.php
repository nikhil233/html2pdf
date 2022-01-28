<?php
$html2 = '

<style>
    @page
    {
        size: auto;
        margin: 0mm;  /* this affects the margin in the printer settings */
    }
    html
    {
        margin: 0px;  /* this affects the margin on the html before sending to printer */
    }
    body {
        margin:0px;
        background-image: url("https://edmingle.b-cdn.net/customers/adityabirla/Rakhi%20Dey.png");
        background-image-resize:6;
        color: #0d2e57;
    }

    .text-center {
      text-align:center;
  }


    .name {
        position: fixed;
        top: 115mm;
        left: 28mm;
        font-size: 36px;
        width: 200mm;
        font-weight: bold;
        color: rgb(255,192,0);
        font-family:lobster;

        

    }
    
    .certificate{
      position: fixed;
      top: 10.2mm;
      right:10mm;
      font-size: 14px;
      width: 120mm;
      color: #000;
      font-family:droidserif;
      text-align:right;
      
    }
    .issued{
        position: fixed;
        top: 157mm;
        left:36mm;
        font-size: 18px;
        width: 40mm;
        color: #000;
        font-family: droidserif;

    }

</style>
<body>
    <div class="certificate " >Certificate No: %certificate_no% </div>
    <div class="issued" >%issued_on%</div>

    <div class="name " >%student_name%</div>

</body>

';
$path = (getenv('MPDF_ROOT')) ? getenv('MPDF_ROOT') : __DIR__;
require_once $path . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(['margin_left' => 0,
'margin_right' => 0,
'margin_top' => 0,
'margin_bottom' => 0,
'margin_header' => 0,
'margin_footer' => 0,

]);
$mpdf->AddPage('L');
$mpdf->WriteHTML($html2);
$mpdf->Output();

