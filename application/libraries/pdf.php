<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
require_once dirname(__FILE__) . '/report_pdf/libraries/tcpdf/tcpdf.php';
 
require_once  dirname(__FILE__) .  '/report_pdf/libraries/tcpdf/config/tcpdf_config_pdf.php';
require_once  dirname(__FILE__) .  '/report_pdf/tcpdf_lib.php';
require_once  dirname(__FILE__) .  '/report_pdf/templates/cetak_template.php';
class Pdf extends TCPDF
{
    function __construct()
    {
       parent::__construct();
    	 $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);    
    	$this->SetLineStyle(array('width' => 0.25 / $this->k, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(255, 255, 255)));
    	$this->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$this->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
		$this->SetHeaderData("logo-perhutani.png",20);
		// set default monospaced font
		//$this->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

		//set margins
		$this->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$this->SetHeaderMargin(PDF_MARGIN_HEADER);
		$this->SetFooterMargin(PDF_MARGIN_FOOTER);

		//set auto page breaks
		$this->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

		//set image scale factor
		$this->setImageScale(PDF_IMAGE_SCALE_RATIO);
		global $l;
	$this->SetLineStyle(array('width' => 0.25 / $this->k, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(255, 255, 255)));
		//set some language-dependent strings
		$this->setLanguageArray($l);
   
    }
	
}
?>