<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AdmissionusersysSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admission-user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'auth_key') ?>

    <?= $form->field($model, 'password_hash') ?>

    <?= $form->field($model, 'password_reset_token') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'verification_token') ?>

    <?php // echo $form->field($model, 'id_pd') ?>

    <?php // echo $form->field($model, 'nm_pd') ?>

    <?php // echo $form->field($model, 'jk') ?>

    <?php // echo $form->field($model, 'nisn') ?>

    <?php // echo $form->field($model, 'nik') ?>

    <?php // echo $form->field($model, 'tmpt_lahir') ?>

    <?php // echo $form->field($model, 'tgl_lahir') ?>

    <?php // echo $form->field($model, 'id_agama') ?>

    <?php // echo $form->field($model, 'jln') ?>

    <?php // echo $form->field($model, 'rt') ?>

    <?php // echo $form->field($model, 'rw') ?>

    <?php // echo $form->field($model, 'nm_dsn') ?>

    <?php // echo $form->field($model, 'ds_kel') ?>

    <?php // echo $form->field($model, 'id_wil') ?>

    <?php // echo $form->field($model, 'kode_pos') ?>

    <?php // echo $form->field($model, 'jns_tinggal') ?>

    <?php // echo $form->field($model, 'id_alat_transport') ?>

    <?php // echo $form->field($model, 'telepon_rumah') ?>

    <?php // echo $form->field($model, 'telepon_seluler') ?>

    <?php // echo $form->field($model, 'id_kk') ?>

    <?php // echo $form->field($model, 'a_terima_kps') ?>

    <?php // echo $form->field($model, 'no_kps') ?>

    <?php // echo $form->field($model, 'stat_pd') ?>

    <?php // echo $form->field($model, 'nm_ayah') ?>

    <?php // echo $form->field($model, 'tgl_lahir_ayah') ?>

    <?php // echo $form->field($model, 'id_jenjang_pendidikan_ayah') ?>

    <?php // echo $form->field($model, 'id_pekerjaan_ayah') ?>

    <?php // echo $form->field($model, 'id_penghasilan_ayah') ?>

    <?php // echo $form->field($model, 'id_kebutuhan_khusus_ayah') ?>

    <?php // echo $form->field($model, 'nm_ibu_kandung') ?>

    <?php // echo $form->field($model, 'tgl_lahir_ibu') ?>

    <?php // echo $form->field($model, 'id_jenjang_pendidikan_ibu') ?>

    <?php // echo $form->field($model, 'id_penghasilan_ibu') ?>

    <?php // echo $form->field($model, 'id_pekerjaan_ibu') ?>

    <?php // echo $form->field($model, 'id_kebutuhan_khusus_ibu') ?>

    <?php // echo $form->field($model, 'nm_wali') ?>

    <?php // echo $form->field($model, 'tgl_lahir_wali') ?>

    <?php // echo $form->field($model, 'id_jenjang_pendidikan_wali') ?>

    <?php // echo $form->field($model, 'id_pekerjaan_wali') ?>

    <?php // echo $form->field($model, 'id_penghasilan_wali') ?>

    <?php // echo $form->field($model, 'kewarganegaraan') ?>

    <?php // echo $form->field($model, 'regpd_id_reg_pd') ?>

    <?php // echo $form->field($model, 'regpd_id_sms') ?>

    <?php // echo $form->field($model, 'regpd_id_pd') ?>

    <?php // echo $form->field($model, 'regpd_id_sp') ?>

    <?php // echo $form->field($model, 'regpd_id_jns_daftar') ?>

    <?php // echo $form->field($model, 'regpd_nipd') ?>

    <?php // echo $form->field($model, 'regpd_tgl_masuk_sp') ?>

    <?php // echo $form->field($model, 'regpd_id_jns_keluar') ?>

    <?php // echo $form->field($model, 'regpd_tgl_keluar') ?>

    <?php // echo $form->field($model, 'regpd_skhun') ?>

    <?php // echo $form->field($model, 'regpd_a_pernah_paud') ?>

    <?php // echo $form->field($model, 'regpd_a_pernah_tk') ?>

    <?php // echo $form->field($model, 'regpd_mulai_smt') ?>

    <?php // echo $form->field($model, 'regpd_sks_diakui') ?>

    <?php // echo $form->field($model, 'regpd_jalur_skripsi') ?>

    <?php // echo $form->field($model, 'regpd_judul_skripsi') ?>

    <?php // echo $form->field($model, 'regpd_bln_awal_bimbingan') ?>

    <?php // echo $form->field($model, 'regpd_bln_akhir_bimbingan') ?>

    <?php // echo $form->field($model, 'regpd_sk_yudisium') ?>

    <?php // echo $form->field($model, 'regpd_sk_yudisium2') ?>

    <?php // echo $form->field($model, 'regpd_tgl_sk_yudisium') ?>

    <?php // echo $form->field($model, 'regpd_ipk') ?>

    <?php // echo $form->field($model, 'regpd_no_seri_ijazah') ?>

    <?php // echo $form->field($model, 'regpd_sert_prof') ?>

    <?php // echo $form->field($model, 'regpd_a_pindah_mhs_asing') ?>

    <?php // echo $form->field($model, 'regpd_nm_pt_asal') ?>

    <?php // echo $form->field($model, 'regpd_nm_prodi_asal') ?>

    <?php // echo $form->field($model, 'beasiswa_bidikmisi') ?>

    <?php // echo $form->field($model, 'pindahan_uin') ?>

    <?php // echo $form->field($model, 'uuid') ?>

    <?php // echo $form->field($model, 'nm_pd_ktm') ?>

    <?php // echo $form->field($model, 'cprint') ?>

    <?php // echo $form->field($model, 'lock_id') ?>

    <?php // echo $form->field($model, 'step') ?>

    <?php // echo $form->field($model, 'id_jalur_masuk') ?>

    <?php // echo $form->field($model, 'id_foto') ?>

    <?php // echo $form->field($model, 'ranking') ?>

    <?php // echo $form->field($model, 'id_ranking') ?>

    <?php // echo $form->field($model, 'id_sertifikat') ?>

    <?php // echo $form->field($model, 'id_skl') ?>

    <?php // echo $form->field($model, 'jenis_sertifikat') ?>

    <?php // echo $form->field($model, 'id_smt') ?>

    <?php // echo $form->field($model, 'pil1') ?>

    <?php // echo $form->field($model, 'pil2') ?>

    <?php // echo $form->field($model, 'no_peserta') ?>

    <?php // echo $form->field($model, 'status_bayar') ?>

    <?php // echo $form->field($model, 'tgl_bayar') ?>

    <?php // echo $form->field($model, 'kode_ws') ?>

    <?php // echo $form->field($model, 'role') ?>

    <?php // echo $form->field($model, 'id_sekolah') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
