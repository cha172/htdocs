<?php
namespace app\models;

use yii\base\Model;
use yii\helpers\FileHelper;
use yii\imagine\Image;
use Imagine\Image\Box;
class UploadForm extends Model
{

    public $imageFile;

    public function rules()
    {
        return [
            [
                [
                    'imageFile'
                ],
                'file',
                'skipOnEmpty' => false,
                'extensions' => 'jpg'
            ]
        ];
    }

    public function attributeLabels()
    {
        return [
            'imageFile' => 'Pasfoto'
        ];
    }

    public function upload($id, $nmfile)
    {
        if ($this->validate()) {
            $path = 'upload/user';
            if (! is_dir($path)) {
                FileHelper::createDirectory($path, $mode = 0775, $recursive = true);
            }
            $this->imageFile->saveAs($path . '/' . $id . '-' . $nmfile . '@original.' . $this->imageFile->extension);

            Image::thumbnail($path . '/' . $id . '-' . $nmfile . '@original.' . $this->imageFile->extension, 500, 600)->resize(new Box(500, 600))->save($path . '/' . $id . '-' . $nmfile . '.' . $this->imageFile->extension, [
                'quality' => 70
            ]);
            unlink($path . '/' . $id . '-' . $nmfile . '@original.' . $this->imageFile->extension);

            return true;
        }
    }
}
