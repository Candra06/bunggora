<?php

class jurnal_model{
    private $table = 'jadwal';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getData($id)
    {
        $this->db->query('SELECT * FROM `jurnal` jr, jadwal jd, kelas k, detail_mengajar dm WHERE jr.id_jadwal=jd.id AND jd.id_kelas=k.id AND jd.id_mengajar=dm.id AND dm.id_guru='.$id.'');
        return $this->db->resultSet();
    }

    public function getDetailMengajar()
    {
        $this->db->query('SELECT * FROM `detail_mengajar` JOIN guru ON id_guru=guru.id JOIN mapel ON id_mapel=mapel.id ');
        return $this->db->resultSet();
    }

    public function listJurnal($id_jadwal)
    {
        $this->db->query('SELECT * FROM jurnal WHERE id_jadwal='.$id_jadwal.'');
        return $this->db->resultSet();
    }

    public function addDataJadwal($data)
    {
        $add = $this->db->Insert([
            'id_kelas' => $data['id_kelas'],
            'id_mengajar' => $data['id_mapel'],
            'jam' => $data['jam'],
            'hari' => $data['hari'],
        ], $this->table);        
        
        return $add;
    }

    public function addAbsensi($id_siswa, $id_jurnal)
    {
        $add = $this->db->Insert([
            'id_siswa' => $id_siswa,
            'id_jurnal' => $id_jurnal,
            'kehadiran' => 'hadir',
            'keterangan' => 'hadir',
        ], 'absensi');        
        
        return $add;
    }

    public function addDataMengajar($data)
    {
        $add = $this->db->Insert([
            'id_mapel' => $data['id_mapel'],
            'id_guru' => $data['id_guru'],
        ], 'detail_mengajar');        
        
        return $add;
    }

    public function addJurnal($data, $file)
    {
        
        $filename = $file['name'];
        $dir = BASEPATH.'file/materi/'.$filename;
        echo $dir;
        echo $file['tmp_name'];
        move_uploaded_file($file['tmp_name'], $dir);
        $add = $this->db->Insert([
            'id_jadwal' => $data['id_hari'],
            'tanggal' => date("Y-m-d H:i:s"),
            'materi' => $filename,
            'keterangan' => $data['keterangan'],
            'absensi' => $data['absensi'],
        ], 'jurnal');        
        
        return $add;
    }
}
?>