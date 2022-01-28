<?php


$html2 = '
<style>
  @page
  {
      size:  auto;   /* auto is the initial value */
      margin: 0mm;  /* this affects the margin in the printer settings */
  }
  html
  {
      background-color: #FFFFFF;
      margin: 0px;  /* this affects the margin on the html before sending to printer */
  }

  body
  {
      /*border: solid 1px blue ;*/
      margin: 0; /* margin you want for the content */
      font-family: "brandon";
      color:#173d64;
  }
  .main-table {
    background: url(https://edmingle.b-cdn.net/portal/omotec/STEM-ROBOTICS-CERTIFICATE-2021-2022.png);
    width: 11.69in;
    background-repeat: no-repeat;
    height: 8.27in;
    background-image-resize:6;
  }
  .full-width{
    width: 100%;
  }
  .text-center{
    text-align:center;
  }
  .apple{
    font-family: "apple";
    color: #0d2e57;
  }
</style>
<table style="width:12.05in;" cellspacing="0" cellpadding="0">
    <tbody>
        <tr>
            <td align="center" valign="top">
              <table class="main-table full-width" cellspacing="0">
                <tbody>
                    <tr>
                      <td colspan="3" style="padding-top:0.3in">
                        <table class="full-width">
                          <tbody>
                            <tr>
                              <td style="width:2.5in" style="font-size:11pt;color:#13264B;font-family:helneue;">
                                CERTIFICATE NO.: %certificate_no%
                              </td>
                              <td style="width:10in">
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="3" style="padding-top:2.7in;padding-bottom:0.85in;">
                        <table class="full-width">
                          <tbody>
                            <tr>
                              <td style="width:4.2in">
                              </td>
                              <td style="width:6.2in" class="text-center" style="font-size:32pt;color:#f36f21;font-family:dincondensed;">
                                %student_name%
                              </td>
                              <td style="width:1.1">
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="3" style="padding-bottom:4.15in;">
                        <table class="full-width">
                          <tbody>
                            <tr>
                              <td style="width:4.2in">
                              </td>
                              <td style="width:6.2in" class="text-center" style="font-size:32pt;color:#f36f21;font-family:dincondensed;">
                                %course_name%
                              </td>
                              <td style="width:1.1">
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                </tbody>
              </table>
            </td>
          </tr>
      </tbody>
  </table>
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