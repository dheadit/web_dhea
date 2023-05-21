<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa_019".
 *
 * @property int $id
 * @property string $nim
 * @property string $nama
 * @property string $kelas
 * @property string $jurusan
 *
 * @property Profil019 $profil019
 */
class Mahasiswa019 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa_019';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'kelas', 'jurusan'], 'required'],
            [['nim', 'nama', 'kelas', 'jurusan'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'No. Induk Mahasiswa',
            'nama' => 'Nama',
            'kelas' => 'Kelas',
            'jurusan' => 'Jurusan',
        ];
    }

    /**
     * Gets query for [[Profil019]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfil019()
    {
        return $this->hasOne(Profil019::class, ['id_mahasiswa' => 'id']);
    }
}
