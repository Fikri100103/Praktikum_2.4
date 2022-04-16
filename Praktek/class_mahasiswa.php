<?php
class Mahasiswa {
    public $ipk;
    public $nama;
    public $nim;
    public $prodi;
    public $thn_angkatan;

    function __construct($nim, $nama) {
        $this->nim = $nim;
        $this->nama = $nama;
    }

    public function predikat_ipk() {
        if ($this->ipk < 2) {
            return "Cukup";
        } else if ($this->ipk >= 2 && $this->ipk < 3) {
            return "Baik";
        } else if ($this->ipk >= 3 && $this->ipk < 3.75) {
            return "Memuaskan";
        } else if ($this->ipk >= 3.75) {
            return "Cumlaude";
        }
    }
}