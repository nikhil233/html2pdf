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
		background: url("https://edmingle.b-cdn.net/customers/vyoma/Course_completion_certificate_RRPG_sample.png");
		background-image-resize:6;
		color: #0d2e57;
		font-family: "brandon";
	}

	.text-center {
		text-align:center;
	}
	

	.name {
		position: fixed;
		top: 105.25mm;
		font-size: 32px;
		text-align: center;
		width: 100%;
		font-weight: bold;
		color: #1a00ff;
		font-family:lucida;

	}
	.overall-grade {
		overflow: auto;
		position: fixed;
		top: 24.5mm;
		vertical-align: middle;
		font-weight: bold;
		right: 20.5mm;
		width: 21.25mm;

	}


	.certificate{
		position : fixed;
		left : 20mm;
		top : 10mm;
		width : 100mm;
	}

</style>
<body>
<div class="overall-grade text-center"><strong>%overall_grade%</strong></div>
<div class="certificate">CERTIFICATE NO.: %certificate_no%</div>
<div class="name text-center">%student_name%</div>

	

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



