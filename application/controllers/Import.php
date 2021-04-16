<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Import extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    // load model
    $this->load->model('Import_model', 'import');
    $this->load->helper(array('url', 'html', 'form'));
    if (!$this->session->has_userdata('id_pengguna')) {
      redirect('Auth');
    }
  }

  public function index()
  {
    $this->load->view('templates/_head');
    $this->load->view('import/import');
    $this->load->view('templates/_foot');
  }

  public function importFile()
  {
    ini_set('max_execution_time', 0);
    ini_set('memory_limit', '2048M');
    $path = 'upload/';
    require_once APPPATH . "/third_party/PHPExcel.php";
    $config['upload_path'] = $path;
    $config['allowed_types'] = 'xlsx|xls|csv';
    $config['remove_spaces'] = TRUE;
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    if (!$this->upload->do_upload('uploadFile')) {
      $error = array('error' => $this->upload->display_errors());
    } else {
      $data = array('upload_data' => $this->upload->data());
    }
    if (empty($error)) {
      if (!empty($data['upload_data']['file_name'])) {
        $import_xls_file = $data['upload_data']['file_name'];
      } else {
        $import_xls_file = 0;
      }
      $inputFileName = $path . $import_xls_file;

      try {
        $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
        $objReader = PHPExcel_IOFactory::createReader($inputFileType);
        $objPHPExcel = $objReader->load($inputFileName);
        $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
        $flag = true;
        $i = 0;
        foreach ($allDataInSheet as $value) {
          if ($flag) {
            $flag = false;
            continue;
          }
          $inserdata[$i]['nik'] = $value['A'];
          $inserdata[$i]['nama'] = $value['B'];
          $i++;
        }
        $tabel = '';
        $type = $this->session->type;
        switch ($type) {
          case 'PKH':
            $tabel = 'tb_pkh';
            break;
          case 'BPNT':
            $tabel = 'tb_bpnt';
            break;
          case 'LKSA':
            $tabel = 'tb_lksa';
            break;
          case 'PBI':
            $tabel = 'tb_pbi';
            break;
          case 'DTKS':
            $tabel = 'tb_dtks';
            break;

          default:
            $tabel = 'tb_import';
            break;
        }
        $_truncate = $this->dataHandle->other_query("TRUNCATE TABLE $tabel");
        if ($_truncate) :
          $response = $this->db->insert_batch($tabel, $inserdata);
          if ($response) {
            $_count = $this->dataHandle->other_query("SELECT count(id) as total FROM $tabel")->row();
            $data_input = ['jenis' => $type, 'total' => $_count->total];
            $this->dataHandle->insert('tb_data', $data_input);
            $res['status'] = 1;
            $res['msg'] = "Imported successfully";
          } else {
            $res['status'] = 0;
            $res['msg'] = "ERROR !";
          }
        else :
          $res['status'] = 0;
          $res['msg'] = "ERROR !";
        endif;
      } catch (Exception $e) {
        die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
          . '": ' . $e->getMessage());
      }
    } else {
      $res['status'] = 0;
      $res['msg'] = $error['error'];
    }
    echo json_encode($res);
  }
  function manual()
  {
    $this->load->view('templates/_head');
    $this->load->view('import/manual');
    $this->load->view('templates/_foot');
  }

  function prosesManual()
  {
    $total = $this->input->post('total', TRUE);
    $type = $this->session->type;
    $data_input = ['jenis' => $type, 'total' => $total];
    $insert = $this->dataHandle->insert('tb_data', $data_input);
    if ($insert) {
      $res['status'] = 1;
      $res['msg'] = "Insert successfully";
    } else {
      $res['status'] = 0;
      $res['msg'] = "Insert Error";
    }
    echo json_encode($res);
  }
}
