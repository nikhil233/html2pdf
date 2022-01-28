<?php


$html2 = '
<style>
    @import url("https://fonts.googleapis.com/css2?family=Lora&display=swap");
    @page
    {
        size: auto;
        margin: 0mm;  /* this affects the margin in the printer settings */
    }
    html
    {
        background-color: #FFFFFF;
        margin: 0px;  /* this affects the margin on the html before sending to printer */
    }
    body {
        margin:0px;
        background: url("https://edmingle.b-cdn.net/customers/Leapup/FIB H.R. Certificate.png");
        background-image-resize:6;
        color: #0d2e57;
        
    }

    .name {
        position: fixed;
        top: 93mm;
        left:16mm;
        font-size: 31px;
        width: 200mm;
        font-weight: bold;
        color: #ED9936;
        font-family:Mulish;
        text-align:left;
        

    }
    

</style>
<body>
    <div class="name" style="font-family:Mulish">%student_name%</div>
 
</body>




';


$path = (getenv('MPDF_ROOT')) ? getenv('MPDF_ROOT') : __DIR__;
require_once $path . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(['margin_left' => 0,
'margin_right' => 0,
'margin_top' => 0,
'margin_bottom' => 0,
'margin_header' => 0,
'margin_footer' => 0,]);
$mpdf->AddPage('L');
$mpdf->WriteHTML($html2);
$mpdf->Output();