<?php 
 
class oktober extends CI_Model {   

    function calc_mejaOktober($meja) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','10');
        $this->db->where('tipeBarang', $meja);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_kursiOktober($kursi) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','10');
        $this->db->where('tipeBarang', $kursi);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_lemariOktober($lemari) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','10');
        $this->db->where('tipeBarang', $lemari);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_kitchenOktober($kitchen) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','10');
        $this->db->where('tipeBarang', $kitchen);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_pintuOktober($pintu) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','10');
        $this->db->where('tipeBarang', $pintu);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_bedOktober($bed) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','10');
        $this->db->where('tipeBarang', $bed);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_triplekOktober($triplek) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','10');
        $this->db->where('tipeBarang', $triplek);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_rakOktober($rak) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','10');
        $this->db->where('tipeBarang', $rak);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }














}