<?php
class model_PPDB extends CI_Model
{
    public function input_buktiDB($gambar, $wa)
    {
        $data = array(
            'bukti_transfer' => $gambar,
            'no_wa' => $wa,
        );
        $this->db->insert('bukti_pembayaran', $data);
    }
    public function input_wali_mod($namawali, $alamatwali, $nik, $pendapatan, $telportu)
    {
        $data = array(
            'nama_orangtua' => $namawali,
            'alamat_orangtua' => $alamatwali,
            'nik' => $nik,
            'pendapatan' => $pendapatan,
            'no_hp_ortu' => $telportu
        );
        $this->db->insert('data_orang_tua_wali', $data);
    }
}
