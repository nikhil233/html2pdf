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
		background-color: #FFFFFF;
		margin: 0px;  /* this affects the margin on the html before sending to printer */
	}
	body {
		margin:0px;
		background: url("https://edmingle.b-cdn.net/customers/cognition/CERTIFICATE%201.png");
		background-image-resize:6;
		color: #0d2e57;
		font-family: "brandon";
	}

	.text-center {
		text-align:center;
	}


	.name {
		position: fixed;
		top: 61mm;
    	left: 65mm;
		font-size: 25px;
		width: 170mm;
		font-weight: bold;
		color: #223876;
		
		

	}
	.registration{
		position: fixed;
		top: 73mm;
    	left: 65mm;
		font-size: 18px;
		width: 170mm;
		font-weight: bold;
		color: #223876;
	}
	.school{
		position: fixed;
		top: 100mm;
    	left: 50mm;
		font-size: 25px;
		width: 200mm;
		font-weight: bold;
		color: #223876;
	
	}
	.activity{
		position: fixed;
		top: 130mm;
    	left: 30mm;
		font-size: 20px;
		width: 240mm;
		font-weight: bold;
		color: #223876;
	
	}
	.start_date{
		position: fixed;
		top: 153mm;
    	left: 107mm;
		font-size: 20px;
		width: 50mm;
		font-weight: bold;
		color: #223876;
		
		
	}
	.end_date{
		position: fixed;
		top: 153mm;
    	left: 169mm;
		font-size: 20px;
		width: 50mm;
		font-weight: bold;
		color: #223876;
		
		
	}

	

</style>
<body>

<div class="name text-center">%student_name%</div>
<div class="registration text-center">%registration_no%</div>

<div class="school text-center">%school_name%</div>
<div class="activity text-center">%activity%</div>


<div class="start_date">%start_date%</div>
<div class="end_date">%end_date%</div>


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
?>


