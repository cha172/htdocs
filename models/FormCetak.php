<?php

namespace app\models;

use yii\base\Model;


class FormCetak extends Model
{

    public $bulan,$tahun;
    public function rules()
    {
        return [
            [['bulan','tahun'], 'required'],
            [['bulan','tahun'], 'string'],

        ];
    }


    
    public function ListTahun()
    
    {
        $thn = date('Y');
        $arr=[];
        for ($x=0; $x<10 ; $x++) {
            $arr[$thn-$x] = $thn-$x;
        }
        return $arr;
    }
    
    public function ListBulan()
    
    {

        $arr=[];
        $arr['01']='Januari';
        $arr['02']= 'Februari';
        $arr['03']= 'Maret';
        $arr['04']= 'April';
        $arr['05']= 'Mei';
        $arr['06']= 'Juni';
        $arr['07']= 'Juli';
        $arr['08']= 'Agustus';
        $arr['09']= 'September';
        $arr['10']= 'Oktober';
        $arr['11']= 'November';
        $arr['12']= 'Desember';
        return $arr;
    }
    
    public function konversibulan($bln)
    {
        switch ($bln) {
           
            case '01':
                $b='Januari';
                break;
            case '02':
                $b='Februari';
                break;
           case '03':
               $b='Maret';
               break;
            case '04':
                $b= 'April';
                break;
            case '05': 
                $b= 'Mei';
                break;
            case '06':
                $b= 'Juni';
                break;
            case '07':
                $b= 'Juli';
                break;
            case '08': 
                $b='Agustus';
                break;
            case '09':
                $b='September';
                break;
            case '10':
                $b= 'Oktober';
                break;
            case '11':
                $b ='November';
                break;
            case '12': 
                $b= 'Desember';
                break;
        }
        return $b;
        
    }
}
