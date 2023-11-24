<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class KelolaData extends CI_Model
{

    private static $data = [
        'status'     => true,
        'message'     => null,
    ];

    public function __construct()
    {
        parent::__construct();
        Self::$data['csrf_data']     = $this->security->get_csrf_hash();
    }

    function changePassword()
    {
        if (!$this->ion_auth->hash_password_db(userid(), post('current_password'))) {
            Self::$data['status']     = false;
            Self::$data['message']     = 'Kata Sandi Saat Ini Yang Anda Masukkan Salah !';
        }

        $this->form_validation->set_rules('current_password', 'Kata Sandi Saat Ini', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('new_password', 'Kata Sandi Baru', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('confirm_password', 'Ulangi Kata Sandi Baru', 'trim|required|matches[new_password]');
        if ($this->form_validation->run() == FALSE) {
            Self::$data['status']     = false;
            Self::$data['message']     = validation_errors(' ', '<br/>');
        }

        if (Self::$data['status']) {

            $this->ion_auth->update(userid(), [
                'password'    => post('new_password')
            ]);

            Self::$data['heading']     = 'Berhasil';
            Self::$data['message']     = 'Password Anda berhasil di perbaharui !';
            Self::$data['type']     = 'success';
        } else {

            Self::$data['heading']     = 'Gagal';
            Self::$data['type']     = 'error';
        }

        return Self::$data;
    }
    function changeWhatsapp()
    {
        // if (!$this->ion_auth->hash_password_db(userid(), post('current_whatsapp'))) {
        //     Self::$data['status']     = false;
        //     Self::$data['message']     = 'Nomer WhatsApp Saat Ini Yang Anda Masukkan Salah !';
        // }

        // $this->form_validation->set_rules('current_whatsapp', 'Nomer WhatsApp Saat Ini');
        $this->form_validation->set_rules('new_whatsapp', 'Nomer WhatsApp Baru', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            Self::$data['status']     = false;
            Self::$data['message']     = validation_errors(' ', '<br/>');
        }

        if (Self::$data['status']) {

            $this->ion_auth->update(userid(), [
                'user_phone'    => post('new_whatsapp')
            ]);

            Self::$data['heading']     = 'Berhasil';
            Self::$data['message']     = 'WhatsApp Anda berhasil di perbaharui !';
            Self::$data['type']     = 'success';
        } else {

            Self::$data['heading']     = 'Gagal';
            Self::$data['type']     = 'error';
        }

        return Self::$data;
    }

    function changeinfoprofile()
    {
        $this->form_validation->set_rules('user_address', 'Alamat Lengkap', 'required');
        if ($this->form_validation->run() == FALSE) {
            Self::$data['status']     = false;
            Self::$data['message']     = validation_errors(' ', '<br/>');
        }

        if (Self::$data['status']) {

            $this->db->update(
                'tb_users',
                [
                    'user_address'      => post('user_address'),
                    'user_facebook'     => post('user_facebook'),
                    'user_twitter'      => post('user_twitter'),
                    'user_instagram'    => post('user_instagram'),
                ],
                [
                    'id'                => userid(),
                ]
            );

            Self::$data['heading']     = 'Berhasil';
            Self::$data['message']     = 'Info Profil Diperbarui !';
            Self::$data['type']         = 'success';
        } else {

            Self::$data['heading']     = 'Gagal';
            Self::$data['type']     = 'error';
        }

        return Self::$data;
    }

    function saveprofiledata()
    {
        $config['upload_path']          = './assets/image/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = '9999';
        $config['max_width']            = '9999';
        $config['max_height']           = '9999';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('user_picture')) {
            Self::$data['status']     = false;
            Self::$data['message']     = $this->upload->display_errors();
        }

        $this->form_validation->set_rules('user_fullname', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('user_phone', 'No Telepon', 'required');
        $this->form_validation->set_rules('user_wa', 'No Whatsapp', 'required');
        if ($this->form_validation->run() == FALSE) {
            Self::$data['status']     = false;
            Self::$data['message']     = validation_errors(' ', '<br/>');
        }

        if (Self::$data['status']) {
            $uploaded               = $this->upload->data();

            $this->db->update(
                'tb_users',
                [
                    'user_fullname' => post('user_fullname'),
                    'user_phone'    => post('user_phone'),
                    'user_wa'       => post('user_wa'),
                    'user_picture'  => $uploaded['file_name'],

                ],
                [
                    'id'            => userid(),
                ]
            );

            Self::$data['heading']      = 'Berhasil';
            Self::$data['message']      = 'Profil Diperbarui!';
            Self::$data['type']         = 'success';
        } else {

            Self::$data['heading']     = 'Gagal';
            Self::$data['type']     = 'error';
        }

        return Self::$data;
    }

    function produkbaru()
    {
        $this->form_validation->set_rules('produk_nama', 'Nama Produk', 'required');
        $this->form_validation->set_rules('produk_harga', 'Harga Per KG', 'required');

        if (!$this->form_validation->run()) {
            Self::$data['status']     = false;
            Self::$data['message']     = validation_errors(' ', '<br/>');
        }

        if (Self::$data['status']) {
            $random_string         = strtolower(random_string('alnum', 64));
            $this->db->insert(
                'tb_produk',
                [
                    'produk_nama'           => post('produk_nama'),
                    'produk_harga'          => post('produk_harga'),
                    'produk_update'         => sekarang(),
                    'produk_code'           => $random_string,
                ]
            );

            Self::$data['heading']    = 'Berhasil';
            Self::$data['message']    = 'Produk Berhasil Ditambah';
            Self::$data['type']        = 'success';
        } else {
            Self::$data['heading']     = 'Gagal';
            Self::$data['type']     = 'error';
        }
        return Self::$data;
    }

    function newlink()
    {
        $this->form_validation->set_rules('link_title', 'Judul Link', 'required');
        $this->form_validation->set_rules('link_url', 'URL', 'required');
        if (!$this->form_validation->run()) {
            Self::$data['status']     = false;
            Self::$data['message']     = validation_errors(' ', '<br/>');
        }
        if (Self::$data['status']) {
            $random_string         = strtolower(random_string('alnum', 64));
            $this->db->insert(
                'tb_link',
                [
                    'link_name'             => 'footerurl',
                    'link_title'            => post('link_title'),
                    'link_url'              => post('link_url'),
                    'link_code'             => $random_string,
                ]
            );

            Self::$data['heading']      = 'Success';
            Self::$data['message']      = 'URL Saved';
            Self::$data['type']         = 'success';
        } else {
            Self::$data['heading']      = 'Gagal';
            Self::$data['type']         = 'error';
        }
        return Self::$data;
    }

    function hapusurl()
    {
        $this->db->where('link_code', post('code'));
        $cekdata = $this->db->get('tb_link');
        if ($cekdata->num_rows() == 0) {
            Self::$data['status']     = false;
            Self::$data['message']     = 'URL Tidak Ditemukan';
        }

        if (Self::$data['status']) {

            $this->db->where('link_code', post('code'));
            $this->db->delete('tb_link');

            Self::$data['heading']    = 'Success';
            Self::$data['message']    = 'URL Dihapus';
            Self::$data['type']        = 'success';
        } else {
            Self::$data['heading']     = 'Error';
            Self::$data['type']     = 'error';
        }
        return Self::$data;
    }

    function produkupdate()
    {
        $this->form_validation->set_rules('produk_nama', 'Nama Produk', 'required');
        $this->form_validation->set_rules('produk_harga', 'Harga Per KG', 'required');

        if (!$this->form_validation->run()) {
            Self::$data['status']     = false;
            Self::$data['message']     = validation_errors(' ', '<br/>');
        }

        $this->db->where('produk_code', post('produk_code'));
        $cekproduk = $this->db->get('tb_produk');
        if ($cekproduk->num_rows() == 0) {
            Self::$data['status']     = false;
            Self::$data['message']     = "Produk Tidak Ditemukan";
        }

        if (Self::$data['status']) {

            $this->db->where('produk_code', post('produk_code'));
            $this->db->update('tb_produk', [
                'produk_nama'           => post('produk_nama'),
                'produk_harga'          => post('produk_harga'),
                'produk_update'         => sekarang(),
            ]);

            $random_string         = strtolower(random_string('alnum', 64));
            $this->db->insert(
                'tb_historiproduk',
                [
                    'historiproduk_deskripsi'   => 'Update Produk ' . post('produk_nama') . ' Harga Rp. ' . number_format(post('produk_harga'), 0, ',', '.'),
                    'historiproduk_date'        => sekarang(),
                    'historiproduk_produkcode'  => post('produk_code'),
                    'historiproduk_code'        => $random_string,
                ]
            );

            Self::$data['heading']    = 'Berhasil';
            Self::$data['message']    = 'Produk Berhasil Diperbarui';
            Self::$data['type']        = 'success';
        } else {
            Self::$data['heading']     = 'Gagal';
            Self::$data['type']     = 'error';
        }
        return Self::$data;
    }

    function produkhapus()
    {
        $this->db->where('produk_code', post('code'));
        $cekdata = $this->db->get('tb_produk');
        if ($cekdata->num_rows() == 0) {
            Self::$data['status']     = false;
            Self::$data['message']     = 'Produk Tidak Ditemukan';
        }

        if (Self::$data['status']) {

            $this->db->where('produk_code', post('code'));
            $this->db->delete('tb_produk');

            Self::$data['heading']    = 'Success';
            Self::$data['message']    = 'Produk Dihapus';
            Self::$data['type']        = 'success';
        } else {
            Self::$data['heading']     = 'Error';
            Self::$data['type']     = 'error';
        }
        return Self::$data;
    }

    function statuspesanan()
    {
        $this->db->where('datapemesanan_code', post('code'));
        $cekdata = $this->db->get('tb_datapemesanan');
        if ($cekdata->num_rows() == 0) {
            Self::$data['status']     = false;
            Self::$data['message']     = "Data Tidak Ditemukan";
        }

        if (Self::$data['status']) {
            $this->db->where('datapemesanan_code', post('code'));
            $this->db->update('tb_datapemesanan', [
                'datapemesanan_status'           => post('datapemesanan_status'),
            ]);

            Self::$data['heading']    = 'Berhasil';
            Self::$data['message']    = 'Status Pesanan Diperbarui';
            Self::$data['type']        = 'success';
        } else {
            Self::$data['heading']     = 'Gagal';
            Self::$data['type']     = 'error';
        }
        return Self::$data;
    }

    function savepagekontak()
    {
        $this->form_validation->set_rules('kontak_address', 'Alamat Lengkap', 'required');
        $this->form_validation->set_rules('kontak_email', 'Alamat Email', 'required');
        $this->form_validation->set_rules('kontak_telepon', 'No Telepon', 'required');
        if (!$this->form_validation->run()) {
            Self::$data['status']     = false;
            Self::$data['message']     = validation_errors(' ', '<br/>');
        }

        if (Self::$data['status']) {

            $this->db->where('contact_name', 'contact-info');
            $cekdata = $this->db->get('tb_pagecontact');

            if ($cekdata->num_rows() == 0) {

                $this->db->insert(
                    'tb_pagecontact',
                    [
                        'contact_name'          => 'contact-info',
                        'contact_option1'       => post('kontak_address'),
                        'contact_option2'       => post('kontak_email'),
                        'contact_option3'       => post('kontak_telepon'),
                    ]
                );
            } else {
                $this->db->where('contact_name', 'contact-info');
                $this->db->update('tb_pagecontact', [
                    'contact_option1'       => post('kontak_address'),
                    'contact_option2'       => post('kontak_email'),
                    'contact_option3'       => post('kontak_telepon'),
                ]);
            }

            Self::$data['heading']      = 'Berhasil';
            Self::$data['message']      = 'Informasi Kontak Diperbarui';
            Self::$data['type']         = 'success';
        } else {
            Self::$data['heading']     = 'Gagal';
            Self::$data['type']     = 'error';
        }
        return Self::$data;
    }

    function savepagekontaksosmed()
    {

        $this->db->where('contact_name', 'contact-social');
        $cekdata = $this->db->get('tb_pagecontact');

        if ($cekdata->num_rows() == 0) {

            $this->db->insert(
                'tb_pagecontact',
                [
                    'contact_name'          => 'contact-social',
                    'contact_option1'       => post('facebook'),
                    'contact_option2'       => post('twitter'),
                    'contact_option3'       => post('instagram'),
                ]
            );
        } else {
            $this->db->where('contact_name', 'contact-social');
            $this->db->update('tb_pagecontact', [
                'contact_option1'       => post('facebook'),
                'contact_option2'       => post('twitter'),
                'contact_option3'       => post('instagram'),
            ]);
        }

        Self::$data['heading']      = 'Berhasil';
        Self::$data['message']      = 'Social Media Kontak Diperbarui';
        Self::$data['type']         = 'success';

        return Self::$data;
    }

    function savepagetentang()
    {
        $this->db->where('tentang_name', 'tentang-data');
        $cekdata = $this->db->get('tb_pagetentang');

        if ($cekdata->num_rows() == 0) {

            $this->db->insert(
                'tb_pagetentang',
                [
                    'tentang_name'          => 'tentang-data',
                    'tentang_option1'       => post('option1'),
                    'tentang_option2'       => post('option2'),
                    'tentang_option3'       => post('option3'),
                    'tentang_option4'       => post('option4'),
                    'tentang_option5'       => post('option5'),
                    'tentang_option6'       => post('option6'),
                    'tentang_option7'       => post('option7'),
                    'tentang_option8'       => post('option8'),
                    'tentang_option9'       => post('option9'),
                    'tentang_option10'       => post('option10'),
                    'tentang_option11'       => post('option11'),
                    'tentang_option12'       => post('option12'),
                    'tentang_option13'       => post('option13'),
                ]
            );
        } else {
            $this->db->where('tentang_name', 'tentang-data');
            $this->db->update('tb_pagetentang', [
                'tentang_option1'       => post('option1'),
                'tentang_option2'       => post('option2'),
                'tentang_option3'       => post('option3'),
                'tentang_option4'       => post('option4'),
                'tentang_option5'       => post('option5'),
                'tentang_option6'       => post('option6'),
                'tentang_option7'       => post('option7'),
                'tentang_option8'       => post('option8'),
                'tentang_option9'       => post('option9'),
                'tentang_option10'       => post('option10'),
                'tentang_option11'       => post('option11'),
                'tentang_option12'       => post('option12'),
                'tentang_option13'       => post('option13'),
            ]);
        }

        Self::$data['heading']      = 'Berhasil';
        Self::$data['message']      = 'Tentang Kami Diperbarui';
        Self::$data['type']         = 'success';

        return Self::$data;
    }


    function savefooterdesc()
    {
        $this->db->where('tentang_name', 'footer-desc');
        $cekdata = $this->db->get('tb_pagetentang');

        if ($cekdata->num_rows() == 0) {

            $this->db->insert(
                'tb_pagetentang',
                [
                    'tentang_name'          => 'footer-desc',
                    'tentang_option1'       => post('option1'),
                ]
            );
        } else {
            $this->db->where('tentang_name', 'footer-desc');
            $this->db->update('tb_pagetentang', [
                'tentang_option1'       => post('option1'),
            ]);
        }

        Self::$data['heading']      = 'Berhasil';
        Self::$data['message']      = 'Data Kami Diperbarui';
        Self::$data['type']         = 'success';

        return Self::$data;
    }

    function savebannersosmed()
    {
        $this->form_validation->set_rules('banner_title', 'Banner Title', 'required');
        if ($this->form_validation->run() == FALSE) {
            Self::$data['status']     = false;
            Self::$data['message']     = validation_errors(' ', '<br/>');
        }

        $config['upload_path']          = './assets/image/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = '9999';
        $config['max_width']            = '9999';
        $config['max_height']           = '9999';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (Self::$data['status']) {

            $this->db->where('banner_name', 'banner');
            $cekdata = $this->db->get('tb_banner');
            // CEK DATA
            if ($cekdata->num_rows() == 0) {
                if ($this->upload->do_upload('banner_img')) {
                    $banner            = $this->upload->data();
                    $this->db->insert(
                        'tb_banner',
                        [
                            'banner_name'              => 'banner',
                            'banner_title'             => post('banner_title'),
                            'banner_desc'              => post('banner_description'),
                            'banner_img'               => $banner['file_name'],

                        ]
                    );
                } else {
                    $this->db->insert(
                        'tb_banner',
                        [
                            'banner_name'              => 'banner',
                            'banner_title'             => post('banner_title'),
                            'banner_desc'              => post('banner_description'),

                        ]
                    );
                }
            } else {
                if ($this->upload->do_upload('banner_img')) {
                    $banner            = $this->upload->data();
                    $databanner        = $cekdata->row();

                    if (!empty($databanner->banner_img)) {
                        if (file_exists('./assets/image/' . $databanner->banner_img)) {
                            unlink($_SERVER['DOCUMENT_ROOT'] . '/assets/image/' . $databanner->banner_img);
                        }
                    }

                    $this->db->where('banner_name', 'banner');
                    $this->db->update('tb_banner', [
                        'banner_title'             => post('banner_title'),
                        'banner_desc'              => post('banner_description'),
                        'banner_img'               => $banner['file_name'],
                    ]);
                } else {
                    $this->db->where('banner_name', 'banner');
                    $this->db->update('tb_banner', [
                        'banner_title'             => post('banner_title'),
                        'banner_desc'              => post('banner_description'),
                    ]);
                }
            }

            Self::$data['heading']      = 'Berhasil';
            Self::$data['message']      = 'Banner Saved!';
            Self::$data['type']         = 'success';
        } else {

            Self::$data['heading']      = 'Gagal';
            Self::$data['type']         = 'error';
        }

        return Self::$data;
    }
}
