<?php
class library_function extends CI_Model {
	public function sql_details(){

        $sql_details = array(
            'user'  => 'root',
            'pass'  => '',
            'db'    => 'first_admin',
            'host'  => 'localhost'
        );

        return $sql_details;

    }
	public function get_check_exist_assign($id_menu,$id_article){
			$query = $this->db->query("select
						assisgn_menu_article2.id_menu
						FROM
						assisgn_menu_article2
						where  assisgn_menu_article2.id_menu = '$id_menu'
						and assisgn_menu_article2.id_article	=	'$id_article' and assisgn_menu_article2.status = 'Y' ");
       return $query->num_rows();
	}
	public function get_check_prev_modul($id_modul, $id_privilege_modul){
				 $query  = $this->db->query("select * from access_modul where id_modul = '$id_modul' and id_privilege_modul = '$id_privilege_modul' and active = 'Y'  ");
				 return $query->num_rows();
	}
	public function get_check_prev_page($id_page, $id_privilege_page){
				 $query  = $this->db->query("select * from access_page where id_page = '$id_page' and id_privilege_page = '$id_privilege_page' and active = 'Y'  ");
				 return $query->num_rows();
				// return "select * from access_page where id_page = '$id_page' and id_privilege_page = '$id_privilege_page' and active = 'Y'  ";
	}
	public function get_check_prev_subpage($id_subpage, $id_privilege_subpage){
				 $query  = $this->db->query("select * from access_subpage where id_subpage = '$id_subpage' and id_privilege_subpage = '$id_privilege_subpage' and active = 'Y'  ");
				 return $query->num_rows();
	}
	public function terbilang($angka){
        $angka = (float)$angka;
        $bilangan = array(
                '',
                'satu',
                'dua',
                'tiga',
                'empat',
                'lima',
                'enam',
                'tujuh',
                'delapan',
                'sembilan',
                'sepuluh',
                'sebelas'
        );
        if ($angka < 12) {
            return $bilangan[$angka];
        } else if ($angka < 20) {
            return $bilangan[$angka - 10] . ' belas';
        } else if ($angka < 100) {
            $hasil_bagi = (int)($angka / 10);
            $hasil_mod = $angka % 10;
            return trim(sprintf('%s puluh %s', $bilangan[$hasil_bagi], $bilangan[$hasil_mod]));
        } else if ($angka < 200) {
            return sprintf('seratus %s', terbilang($angka - 100));
        } else if ($angka < 1000) {
            $hasil_bagi = (int)($angka / 100);
            $hasil_mod = $angka % 100;
            return trim(sprintf('%s ratus %s', $bilangan[$hasil_bagi], terbilang($hasil_mod)));
        } else if ($angka < 2000) {
            return trim(sprintf('seribu %s', terbilang($angka - 1000)));
        } else if ($angka < 1000000) {
            $hasil_bagi = (int)($angka / 1000); // karena hasilnya bisa ratusan jadi langsung digunakan rekursif
            $hasil_mod = $angka % 1000;
            return sprintf('%s ribu %s', terbilang($hasil_bagi), terbilang($hasil_mod));
        } else if ($angka < 1000000000) {

            // hasil bagi bisa satuan, belasan, ratusan jadi langsung kita gunakan rekursif
            $hasil_bagi = (int)($angka / 1000000);
            $hasil_mod = $angka % 1000000;
            return trim(sprintf('%s juta %s', terbilang($hasil_bagi), terbilang($hasil_mod)));
        } else if ($angka < 1000000000000) {
            // bilangan 'milyaran'
            $hasil_bagi = (int)($angka / 1000000000);
            $hasil_mod = fmod($angka, 1000000000);
            return trim(sprintf('%s milyar %s', terbilang($hasil_bagi), terbilang($hasil_mod)));
        } else if ($angka < 1000000000000000) {
            // bilangan 'triliun'
            $hasil_bagi = $angka / 1000000000000;
            $hasil_mod = fmod($angka, 1000000000000);
            return trim(sprintf('%s triliun %s', terbilang($hasil_bagi), terbilang($hasil_mod)));
        } else {
            return 'Format angka melebihi batas';
        }

    }



	public function hari_indo($tanggal){
		$day = date('D', strtotime($tanggal));
		$dayList = array(
			'Sun' => 'Minggu',
			'Mon' => 'Senin',
			'Tue' => 'Selasa',
			'Wed' => 'Rabu',
			'Thu' => 'Kamis',
			'Fri' => 'Jumat',
			'Sat' => 'Sabtu'
		);

		return $dayList[$day];
	}
	public function genCode() {
					$create = strtoupper(md5(uniqid(rand(),true)));
					$style =
						substr($create,0,8);
					return $style;
				}
				public function getExtension($str) {

																 $i = strrpos($str,".");
																 if (!$i) { return ""; }
																 $l = strlen($str) - $i;
																 $ext = substr($str,$i+1,$l);
																 return $ext;
									}
	
	function tgl_indo($tgl){
			$tanggal = substr($tgl,8,2);
			$bulan = getBulan(substr($tgl,5,2));
			$tahun = substr($tgl,0,4);
			return $tanggal.' '.$bulan.' '.$tahun;
}

function getBulan($bln){
				switch ($bln){
					case 1:
						return "Januari";
						break;
					case 2:
						return "Februari";
						break;
					case 3:
						return "Maret";
						break;
					case 4:
						return "April";
						break;
					case 5:
						return "Mei";
						break;
					case 6:
						return "Juni";
						break;
					case 7:
						return "Juli";
						break;
					case 8:
						return "Agustus";
						break;
					case 9:
						return "September";
						break;
					case 10:
						return "Oktober";
						break;
					case 11:
						return "November";
						break;
					case 12:
						return "Desember";
						break;
				}
	}
}
?>
