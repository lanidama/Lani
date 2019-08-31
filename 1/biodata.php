<?php
	
	class Skill {
		
		public $name = "";
		public $level = "";
		
		public function __construct($fname, $flevel) {
			$this->name = $fname;
			$this->level = $flevel;
		}
	}
	
	class School {
		public $name = "";
		public $year_in = 0;
		public $year_out = 0;
		public $major = null;
		
		public function __construct($fname, $fyear_in, $fyear_out, $fmajor) {
			$this->name = $fname;
			$this->year_in = $fyear_in;
			$this->year_out = $fyear_out;
			$this->major = $fmajor;
		}
	}

	$listSchool = array(
		new School("SMA Negri 115 Jakarta", 2010, 2013, "IPA"),
		new School("CCIT FTUI NIIT", 2013, 2015, "IT Regular"),
		new School("Universitas Trilogi", 2015, 2019, "SI")
	);

	$listSkill = array(
		new Skill("PHP", "beginner"),
		new Skill("C#", "beginner"),
		new Skill("MYSQL", "beginner"),
		new Skill("MSSQL", "beginner")
	);

	$biodata = array(
		"nama" => "Lani Fitria Damayanti",
		"age" => 23,
		"address" => "Perumahan Pesona Laguna 1 Blok F3 No.39, Kelurahan Cilangkap, Kecamatan Tapos, Depok - Jawa Barat 16458",
		"hobbies" => "menggambar, traveling",
		"is_married" => false,
		"list_school" => $listSchool,
		"skills" => $listSkill,
		"interest_in_coding" => true
	);

	echo json_encode($biodata);