<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use Dompdf\Dompdf;

class Pdf 
{
    public function __construct()
    {
       require_once dirname(__FILE__) . '/autoload.inc.php';
       $pdf = new DOMPDF();
       $CI = & get_instance();
       $CI->dompdf = $pdf;
    }
}

/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */
?>