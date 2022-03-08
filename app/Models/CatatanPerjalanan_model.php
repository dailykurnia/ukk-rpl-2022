<?php

namespace App\Models;

class CatatanPerjalanan_model extends BaseModel  {

    //Ini fungsi untuk menambahkan data ke database
    public static function tambah($tanggal,$waktu,$lokasi,$suhu,$nik) {
        $data = BaseModel::csvFileToJson("catatan_perjalanan.csv");
        file_put_contents("catatan_perjalanan.csv","\r\n".$tanggal.",".$waktu.",".$lokasi.",".$suhu.",".$nik,FILE_APPEND);
        return true;
    }

    public static function getAll() {
        $data = BaseModel::csvFileToJson("catatan_perjalanan.csv");
        return $data;
    }

    public static function get_byNIK($nik){
        $data = BaseModel::csvFileToJson("catatan_perjalanan.csv");
        $result = array();
        foreach ($data as $key => $value) {
            if($value['nik'] == $nik){
                array_push($result,$value);
            }
        }
        return $result;
    }
}