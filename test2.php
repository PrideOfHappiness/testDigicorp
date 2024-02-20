<?php 
    class Nilai{
        public $mapel;
        public $nilai;

        function __construct($mapel, $nilai){
            $this->mapel = $mapel;
            $this->nilai = $nilai;
        }
    }
    class Siswa{
        public $nrp;
        public $nama;
        public $daftarNilai = [];


        function __construct($nrp, $nama){
            $this->nrp = $nrp;
            $this->nama = $nama;
        }

        function daftarNilai($mapel, $nilai){
            $daftarNilai = new Nilai($mapel, $nilai);
            if(count($this->daftarNilai) < 3){
                array_push($this->daftarNilai, $daftarNilai);
            }
        }
    }

        //Nomor 2
        function tambahSiswa(){
            $daftarSiswa = new Siswa('122815', 'Test Nama Siswa');
            $daftarSiswa->daftarNilai('Bahasa Inggris', 100);
        }

        //Nomor 3
        function getNamaAcak($length = 10){
            $alfabet ='abcdefghijklmnopqrstuvwxyz';
            $acak = '';
            for($j=0; $j < $length ; $j++){
                $acak .= $alfabet[rand(0, strlen($alfabet) - 1)];
            }
            return $acak;
        }

        $dataSiswa = [];
        for($x=0;$x<10;$x++){
            $angkaAcak = rand(100000,999999);
            $nama = getNamaAcak();
            $siswa = new Siswa($angkaAcak, $nama);
            $mapel = ['Indonesia', 'Inggris', 'Jepang'];
            $mapelAcak = $mapel[array_rand($mapel)];
            $nilai = rand(0,100);
            $siswa->daftarNilai($mapelAcak, $nilai);
            $dataSiswa[] = $siswa;
        }

        foreach($dataSiswa as $siswajadi){
            echo "NRP: ". $siswajadi->nrp . ", Nama peserta: ". $siswajadi->nama . "\n";
            foreach($siswajadi->daftarNilai as $nilai){
                echo "Mata Pelajaran: ". $nilai->mapel . ", Nilai: ". $nilai->nilai . "<br>";
            }
        }
?>
