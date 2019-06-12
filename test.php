<?php

class Bio{
    public $nama        = "";
    public $address     = "";
    public $hobbies     = array();
    public $is_married  = false;
}
    function biodata(){
       $biodata = new Bio();
       $biodata->nama       = "Ridho afni";
       $biodata->address    = "jl. Manunggal, Perumahan Asabri, RT:01 ,RW:38, Blok:C, No:19, Kel. Tuah Madani, Kec. Tampan, Kode Pos:28298, Kota Pekanbaru";
       $biodata->hobbies = array("Badminton", "Football", "Coding");
       $biodata->is_married = false;

        return json_encode($biodata);

    }

    echo biodata();
?>