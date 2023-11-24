<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Exportexcel extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}


	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function userActivation()
	{

		$this->db->join('tb_lending', 'lending_userid = id', 'inner');
		$get_users = $this->db->get('tb_users');



		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $kolom_alpabeth 	= 1;
        $row_alpabeth 		= 'A';
        foreach ($get_users->result() as $user) {
        	
        	$sheet->setCellValue( $row_alpabeth. '1', $user->id );
        	$row_alpabeth++;
			
		}
        
        $writer = new Xlsx($spreadsheet);
 
        $filename = 'name-of-the-generated-file';
 
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
        header('Cache-Control: max-age=0');
        
        $writer->save('php://output'); // download file 

	}

}

/* End of file Exportexcel.php */
/* Location: ./application/models/Exportexcel.php */