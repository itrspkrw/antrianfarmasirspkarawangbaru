<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Antrian extends CI_Controller
{


    public function index()
    {
        $where = date('dmY');
        $data['antrian_non_racikan'] = $this->Antrian_model->Get_antrian_non_racikan(array('date_time' => $where));
        $data['antrian_racikan'] = $this->Antrian_model->Get_antrian_racikan(array('date_time' => $where));
        $data['antrianbpjs_non_racikan'] = $this->Antrian_model->Get_antrianbpjs_non_racikan(array('date_time' => $where));
        $data['antrianbpjs_racikan'] = $this->Antrian_model->Get_antrianbpjs_racikan(array('date_time' => $where));
        $data['slide_count'] = $this->db->count_all('image_slide');

        $this->db->order_by('active', 'DESC');

        $data['slide_image'] = $this->db->get('image_slide')->result_array();
        $data['title'] = 'Antrian Pengambilan Obat';
        $this->load->view('templates/antrian_header', $data);
        $this->load->view('templates/antrian_topbar');
        $this->load->view('antrian/index', $data);
        $this->load->view('templates/antrian_footer');
    }

    public function ambil_antrian()
    {
        $where = date('dmY');
        $data['antrian_non_racikan'] = $this->Antrian_model->Get_antrian_non_racikan(array('date_time' => $where));
        $data['antrian_racikan'] = $this->Antrian_model->Get_antrian_racikan(array('date_time' => $where));
        $data['antrianbpjs_non_racikan'] = $this->Antrian_model->Get_antrianbpjs_non_racikan(array('date_time' => $where));
        $data['antrianbpjs_racikan'] = $this->Antrian_model->Get_antrianbpjs_racikan(array('date_time' => $where));
        $data['title'] = 'Cetak Antrian';

        // $this->load->view('templates/antrian_header', $data);
        $this->load->view('templates/antrian_topbar');
        $this->load->view('antrian/ambil_antrian', $data);
        $this->load->view('templates/antrian_footer');
    }


    public function panggil_antrian()
    {
        $status = 1;
        $time = date('dmY');
        $data['antrian_non_racikan'] = $this->Antrian_model->Get_antrian_non_racikan(array('status' => $status, 'date_time' => $time));
        $data['antrian_racikan'] = $this->Antrian_model->Get_antrian_racikan(array('status' => $status, 'date_time' => $time));
        $data['antrianbpjs_non_racikan'] = $this->Antrian_model->Get_antrianbpjs_non_racikan(array('status' => $status, 'date_time' => $time));
        $data['antrianbpjs_racikan'] = $this->Antrian_model->Get_antrianbpjs_racikan(array('status' => $status, 'date_time' => $time));
        $data['panggil_ulang'] = $this->Antrian_model->get_non_racik_limit();
        $data['panggil_ulang2'] = $this->Antrian_model->get_racik_limit();

        $data['title'] = 'Panggil Antrian';
        $this->load->view('templates/antrian_header', $data);
        $this->load->view('templates/antrian_topbar');
        $this->load->view('antrian/panggil_antrian', $data);
        $this->load->view('templates/antrian_footer');
    }

    public function antrian_non_racikan()
    {

        $time = date('dmY');
        $where = array('status <' => 1, 'date_time' => $time);
        $antrian = $this->Antrian_model->Get_id('antrian_obat_jadi', $where);
        $where2 = $antrian['id_transaksi'];
        $data = array('no_antrian' => $antrian['no_antrian'], 'status ' => 1, 'date_time' => $time);
        $this->Antrian_model->edit('antrian_obat_jadi', $data, $where2);
        redirect('antrian/panggil_antrian');
    }
    public function antrian_racikan()
    {

        $time = date('dmY');
        $where = array('status <' => 1, 'date_time' => $time);
        $antrian = $this->Antrian_model->Get_id('antrian_obat_racikan', $where);
        $where2 = $antrian['id_transaksi'];
        $data = array('no_antrian' => $antrian['no_antrian'], 'status ' => 1, 'date_time' => $time);
        $this->Antrian_model->edit('antrian_obat_racikan', $data, $where2);

        redirect('antrian/panggil_antrian');
    }

    public function antrianbpjs_non_racikan()
    {

        $time = date('dmY');
        $where = array('status <' => 1, 'date_time' => $time);
        $antrian = $this->Antrian_model->Get_id('antrianbpjs_obat_jadi', $where);
        $where2 = $antrian['id_transaksi'];
        $data = array('no_antrian' => $antrian['no_antrian'], 'status ' => 1, 'date_time' => $time);
        $this->Antrian_model->edit('antrianbpjs_obat_jadi', $data, $where2);
        redirect('antrian/panggil_antrian');
    }
    public function antrianbpjs_racikan()
    {

        $time = date('dmY');
        $where = array('status <' => 1, 'date_time' => $time);
        $antrian = $this->Antrian_model->Get_id('antrianbpjs_obat_racikan', $where);
        $where2 = $antrian['id_transaksi'];
        $data = array('no_antrian' => $antrian['no_antrian'], 'status ' => 1, 'date_time' => $time);
        $this->Antrian_model->edit('antrianbpjs_obat_racikan', $data, $where2);

        redirect('antrian/panggil_antrian');
    }


    public function tambah_nonracik()
    {
        $id = $this->input->post('non_racik');
        $table = 'antrian_obat_jadi';
        $no_antrian = $id + 1;
        $tgl = date('dmY');
        $cek = $this->Antrian_model->Get_id($table, array('no_antrian' => $no_antrian, 'date_time' => $tgl));
        if ($cek > 0) {
            redirect('antrian/ambil_antrian/');
        } else {
            $this->Antrian_model->tambah($table, array('no_antrian' => $no_antrian, 'date_time' => $tgl));
        }
        redirect('antrian/print_non_racik/');
    }
    public function tambah_racik()
    {
        $id = $this->input->post('racik');
        $table = 'antrian_obat_racikan';
        $no_antrian = $id + 1;
        $tgl = date('dmY');
        $cek = $this->Antrian_model->Get_id($table, array('no_antrian' => $no_antrian, 'date_time' => $tgl));
        if ($cek > 0) {
            redirect('antrian/ambil_antrian/');
        } else {
            $this->Antrian_model->tambah($table, array('no_antrian' => $no_antrian, 'date_time' => $tgl));
        }
        redirect('antrian/print_racik/');
    }

    public function tambahbpjs_nonracik()
    {
        $id = $this->input->post('bpjsnon_racik');
        $table = 'antrianbpjs_obat_jadi';
        $no_antrian = $id + 1;
        $tgl = date('dmY');
        $cek = $this->Antrian_model->Get_id($table, array('no_antrian' => $no_antrian, 'date_time' => $tgl));
        if ($cek > 0) {
            redirect('antrian/ambil_antrian/');
        } else {
            $this->Antrian_model->tambah($table, array('no_antrian' => $no_antrian, 'date_time' => $tgl));
        }
        redirect('antrian/printbpjs_non_racik/');
    }
    public function tambahbpjs_racik()
    {
        $id = $this->input->post('bpjs_racik');
        $table = 'antrianbpjs_obat_racikan';
        $no_antrian = $id + 1;
        $tgl = date('dmY');
        $cek = $this->Antrian_model->Get_id($table, array('no_antrian' => $no_antrian, 'date_time' => $tgl));
        if ($cek > 0) {
            redirect('antrian/ambil_antrian/');
        } else {
            $this->Antrian_model->tambah($table, array('no_antrian' => $no_antrian, 'date_time' => $tgl));
        }
        redirect('antrian/printbpjs_racik/');
    }

    public function print_non_racik()
    {
        $where = date('dmY');
        $data['jam'] = date('d-M-y H:i');
        $data['antrian_non_racikan'] = $this->Antrian_model->Get_antrian_non_racikan(array('date_time' => $where));
        $data['header'] = 'Rs. Permata Keluarga Karawang';
        $data['title'] = 'Antrian anda';
        $this->load->view('templates/antrian_header', $data);
        $this->load->view('templates/antrian_topbar');
        $this->load->view('print/print_non_racikan', $data);
    }

    public function print_racik()
    {
        $where = date('dmY');
        $data['jam'] = date('d-M-y H:i');
        $data['antrian_racikan'] = $this->Antrian_model->Get_antrian_racikan(array('date_time' => $where));
        $data['header'] = 'Rs. Permata Keluarga Karawang';
        $data['title'] = 'Antrian anda';
        $this->load->view('templates/antrian_header', $data);
        $this->load->view('templates/antrian_topbar');
        $this->load->view('print/print_racikan', $data);
    }

    public function printbpjs_non_racik()
    {
        $where = date('dmY');
        $data['jam'] = date('d-M-y H:i');
        $data['antrianbpjs_non_racikan'] = $this->Antrian_model->Get_antrianbpjs_non_racikan(array('date_time' => $where));
        $data['header'] = 'Rs. Permata Keluarga Karawang';
        $data['title'] = 'Antrian anda';
        $this->load->view('templates/antrian_header', $data);
        $this->load->view('templates/antrian_topbar');
        $this->load->view('print/printbpjs_non_racikan', $data);
    }

    public function printbpjs_racik()
    {
        $where = date('dmY');
        $data['jam'] = date('d-M-y H:i');
        $data['antrianbpjs_racikan'] = $this->Antrian_model->Get_antrianbpjs_racikan(array('date_time' => $where));
        $data['header'] = 'Rs. Permata Keluarga Karawang';
        $data['title'] = 'Antrian anda';
        $this->load->view('templates/antrian_header', $data);
        $this->load->view('templates/antrian_topbar');
        $this->load->view('print/printbpjs_racikan', $data);
    }

    public function get_antri_nonracik()
    {

        $status = 1;
        $time = date('dmY');
        $antrian = $this->Antrian_model->Get_antrian_non_racikan(array('status' => $status, 'date_time' => $time));
        echo json_encode($antrian);
    }
    public function get_antri_racik()
    {

        $status = 1;
        $time = date('dmY');
        $antrian = $this->Antrian_model->Get_antrian_racikan(array('status' => $status, 'date_time' => $time));
        echo json_encode($antrian);
    }

    public function get_antribpjs_nonracik()
    {

        $status = 1;
        $time = date('dmY');
        $antrian = $this->Antrian_model->Get_antrianbpjs_non_racikan(array('status' => $status, 'date_time' => $time));
        echo json_encode($antrian);
    }
    public function get_antribpjs_racik()
    {

        $status = 1;
        $time = date('dmY');
        $antrian = $this->Antrian_model->Get_antrianbpjs_racikan(array('status' => $status, 'date_time' => $time));
        echo json_encode($antrian);
    }

    public function ambil_antri_nonracik()
    {


        $where = date('dmY');
        $antrian = $this->Antrian_model->Get_antrian_non_racikan(array('date_time' => $where));
        echo json_encode($antrian);
    }
    public function ambil_antri_racik()
    {


        $where = date('dmY');
        $antrian = $this->Antrian_model->Get_antrian_racikan(array('date_time' => $where));
        echo json_encode($antrian);
    }

    public function ambil_antribpjs_nonracik()
    {


        $where = date('dmY');
        $antrian = $this->Antrian_model->Get_antrianbpjs_non_racikan(array('date_time' => $where));
        echo json_encode($antrian);
    }
    public function ambil_antribpjs_racik()
    {


        $where = date('dmY');
        $antrian = $this->Antrian_model->Get_antrianbpjs_racikan(array('date_time' => $where));
        echo json_encode($antrian);
    }

}
