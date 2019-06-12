<?php
    class School{

        // public $highSchools    = "PPM AL-Husna Dsn. Salak, Kec. Bagan Sinembah, Kab. Rokan Hilir, Riau";
        // public $university     = "Universitas ISlam Negri Sultan Syarif Kasim Riau"; 

       

        public function biodata(){
            $nama = "fff"; 
            $adress = "fff"; 
            return json_encode($nama);
        }

    }

    $schools = new School();
    echo $schools->biodata();

            // $schols = new School();
            // $schols->nama = "Ridho afni";
            // // $nama       = "Ridho afni";
            // $schols->adress     = "jl. Manunggal, Perumahan Asabri, RT:01 ,RW:38, Blok:C, No:19, Kel. Tuah Madani, Kec. Tampan, Kode Pos:28298, Kota Pekanbaru";
            // $schols->hobbies    = array("Badminton", "Football", "Coding");
            // $is_merried = false;
            // // $schols     = new School();

            // echo json_encode($schols);

?>