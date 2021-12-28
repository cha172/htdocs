<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\AdmissionusersysSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
use app\assets\admin\table\ColorAsset;

ColorAsset::register($this);

$this->title = 'Pengguna Sistem';
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="page-content">
    <div class="header-content">
        <h2><i class="fa fa-magic"></i>Manajemen <span>User Admin System</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li class="active">Data Master</li>
            </ol>
        </div>
    </div><!-- /.header-content -->
    <div class="body-content animated fadeIn">
    
            <div class="row">
            	<div class="col-md-12">
            	 <div class="panel panel-lilac">
          
                <div class="panel-body">
                    <div class="admission-user-index">
                    
             
                        <p>
                             <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Tambah', ['create'], ['class' => 'btn btn-sm btn-primary']) ?>
                        </p>
                    
                        <?php Pjax::begin(); ?>
                        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                    
                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],
                    
                                'username',
                                'role',
                                //'scope_unit',
                     
                                //'email:email',
                                //'status',
                                //'created_at',
                                //'updated_at',
                                //'verification_token',
                                //'id_pd',
                                //'nm_pd',
                                //'jk',
                                //'nisn',
                                //'nik',
                                //'tmpt_lahir',
                                //'tgl_lahir',
                                //'id_agama',
                                //'jln',
                                //'rt',
                                //'rw',
                                //'nm_dsn',
                                //'ds_kel',
                                //'id_wil',
                                //'kode_pos',
                                //'jns_tinggal',
                                //'id_alat_transport',
                                //'telepon_rumah',
                                //'telepon_seluler',
                                //'id_kk',
                                //'a_terima_kps',
                                //'no_kps',
                                //'stat_pd',
                                //'nm_ayah',
                                //'tgl_lahir_ayah',
                                //'id_jenjang_pendidikan_ayah',
                                //'id_pekerjaan_ayah',
                                //'id_penghasilan_ayah',
                                //'id_kebutuhan_khusus_ayah',
                                //'nm_ibu_kandung',
                                //'tgl_lahir_ibu',
                                //'id_jenjang_pendidikan_ibu',
                                //'id_penghasilan_ibu',
                                //'id_pekerjaan_ibu',
                                //'id_kebutuhan_khusus_ibu',
                                //'nm_wali',
                                //'tgl_lahir_wali',
                                //'id_jenjang_pendidikan_wali',
                                //'id_pekerjaan_wali',
                                //'id_penghasilan_wali',
                                //'kewarganegaraan',
                                //'regpd_id_reg_pd',
                                //'regpd_id_sms',
                                //'regpd_id_pd',
                                //'regpd_id_sp',
                                //'regpd_id_jns_daftar',
                                //'regpd_nipd',
                                //'regpd_tgl_masuk_sp',
                                //'regpd_id_jns_keluar',
                                //'regpd_tgl_keluar',
                                //'regpd_skhun',
                                //'regpd_a_pernah_paud',
                                //'regpd_a_pernah_tk',
                                //'regpd_mulai_smt',
                                //'regpd_sks_diakui',
                                //'regpd_jalur_skripsi',
                                //'regpd_judul_skripsi',
                                //'regpd_bln_awal_bimbingan',
                                //'regpd_bln_akhir_bimbingan',
                                //'regpd_sk_yudisium',
                                //'regpd_sk_yudisium2',
                                //'regpd_tgl_sk_yudisium',
                                //'regpd_ipk',
                                //'regpd_no_seri_ijazah',
                                //'regpd_sert_prof',
                                //'regpd_a_pindah_mhs_asing',
                                //'regpd_nm_pt_asal',
                                //'regpd_nm_prodi_asal',
                                //'beasiswa_bidikmisi',
                                //'pindahan_uin',
                                //'uuid',
                                //'nm_pd_ktm',
                                //'cprint',
                                //'lock_id',
                                //'step',
                                //'id_jalur_masuk',
                                //'id_foto',
                                //'ranking',
                                //'id_ranking',
                                //'id_sertifikat',
                                //'id_skl',
                                //'jenis_sertifikat',
                                //'id_smt',
                                //'pil1',
                                //'pil2',
                                //'no_peserta',
                                //'status_bayar',
                                //'tgl_bayar',
                                //'kode_ws',
                                //'role',
                                //'id_sekolah',
                    
                                ['class' => 'yii\grid\ActionColumn',
                                    'template'=>'{update}{delete}'
                                ],
                            ],
                        ]); ?>
                    
                        <?php Pjax::end(); ?>
                    
                    </div>

            	</div>
            </div>
            </div>
            </div>
     </div>
</section> 