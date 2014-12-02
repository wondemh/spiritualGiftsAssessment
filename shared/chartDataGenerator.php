<?php

class ChartDataGenerator {
	private $prophesy;
	private $teaching;
	private $wisdom;
	private $knowledge;
	private $encouragement;
	private $mercy;
	private $hospitality;
	private $faith;
	private $giving;
	private $leadership;
	private $service;
	private $helps;
	private $administration;
	private $miracles;
	private $discerningOfSpirits;
	private $healing;
	private $tongues;
	private $interpretationOfTongues;
	private $pastor;
	private $deacon;
	private $evangelist;
	private $missionary;
	private $falsificationLevel;
	
	private $communicationGifts;
	private $caringGifts;
	private $corporateGifts;
	private $captivatingGifts;
	
	private $individualGifts;
	
	public function __construct() {
		$this -> prophesy = $_POST['C6'] + $_POST['C46'] + $_POST['C105'] + $_POST['C91'];
		$this -> teaching = $_POST['C9'] + $_POST['C41'] + $_POST['C11'] + $_POST['C54'];
		$this -> wisdom = $_POST['C13'] + $_POST['C29'] + $_POST['C80'] + $_POST['C16'];
		$this -> knowledge = $_POST['C18'] + $_POST['C44'] + $_POST['C20'] + $_POST['C50'];
		$this -> encouragement = $_POST['C99'] + $_POST['C24'] + $_POST['C72'] + $_POST['C26'];
		$this -> mercy = $_POST['C28'] + $_POST['C10'] + $_POST['C30'] + $_POST['C85'];
		$this -> hospitality = $_POST['C33'] + $_POST['C34'] + $_POST['C35'] + $_POST['C36'];
		$this -> faith = $_POST['C39'] + $_POST['C40'] + $_POST['C41'] + $_POST['C42'];
		$this -> giving = $_POST['C73'] + $_POST['C14'] + $_POST['C45'] + $_POST['C47'];
		$this -> leadership = $_POST['C48'] + $_POST['C49'] + $_POST['C50'] + $_POST['C51'];
		$this -> service = $_POST['C52'] + $_POST['C53'] + $_POST['C54'] + $_POST['C55'];
		$this -> helps = $_POST['C57'] + $_POST['C88'] + $_POST['C59'] + $_POST['C74'];
		$this -> administration = $_POST['C62'] + $_POST['C63'] + $_POST['C64'] + $_POST['C65'];
		$this -> miracles = $_POST['C67'] + $_POST['C68'] + $_POST['C69'] + $_POST['C70'];
		$this -> discerningOfSpirits = $_POST['C71'] + $_POST['C12'] + $_POST['C53'] + $_POST['C86'];
		$this -> healing = $_POST['C76'] + $_POST['C78'] + $_POST['C79'] + $_POST['C80'];
		$this -> tongues = $_POST['C82'] + $_POST['C83'] + $_POST['C84'] + $_POST['C85'];
		$this -> interpretationOfTongues = $_POST['C86'] + $_POST['C87'] + $_POST['C88'] + $_POST['C89'];
		$this -> pastor = $_POST['C90'] + $_POST['C91'] + $_POST['C92'] + $_POST['C93'];
		$this -> deacon = $_POST['C95'] + $_POST['C96'] + $_POST['C97'] + $_POST['C98'];
		$this -> evangelist = $_POST['C43'] + $_POST['C92'] + $_POST['C101'] + $_POST['C60'];
		$this -> missionary = $_POST['C103'] + $_POST['C104'] + $_POST['C105'] + $_POST['C106'];
		$this -> falsificationLevel = $_POST['C17'] + $_POST['C22'] + $_POST['C27'] + $_POST['C32'] + $_POST['C37'] + $_POST['C56'] + $_POST['C61'] + $_POST['C66'] + $_POST['C81'];

		//All gifts results arrays
		$this -> communicationGifts = array("Prophecy" => $this -> prophesy, "Teaching" => $this -> teaching, "Wisdom" => $this -> wisdom, "Knowledge" => $this -> knowledge);
		$this -> caringGifts = array("Encouragement" => $this -> encouragement, "Mercy" => $this -> mercy, "Hospitality" => $this -> hospitality, "Faith" => $this -> faith, "Giving" => $this -> giving);
		$this -> corporateGifts = array("Leadership" => $this -> leadership, "Service" => $this -> service, "Helps" => $this -> helps, "Administration" => $this -> administration);
		$this -> captivatingGifts = array("Miracles" => $this -> miracles, "Discerning of Spirits" => $this -> discerningOfSpirits, "Healing" => $this -> healing, "Tongues" => $this -> tongues, "Interpretation of Tongues" => $this -> interpretationOfTongues);

		$this -> individualGifts = array("Prophecy" => $this -> prophesy, "Teaching" => $this -> teaching, "Wisdom" => $this -> wisdom, "Knowledge" => $this -> knowledge, "Encouragement" => $this -> encouragement, "Mercy" => $this -> mercy, "Hospitality" => $this -> hospitality, "Faith" => $this -> faith, "Giving" => $this -> giving, "Leadership" => $this -> leadership, "Service" => $this -> service, "Helps" => $this -> helps, "Administration" => $this -> administration, "Miracles" => $this -> miracles, "Discerning of Spirits" => $this -> discerningOfSpirits, "Healing" => $this -> healing, "Tongues" => $this -> tongues, "Interpretation of Tongues" => $this -> interpretationOfTongues, "Pastor" => $this -> pastor, "Deacon" => $this -> deacon, "Evangelist" => $this -> evangelist, "Missionary" => $this -> missionary, "Falsification Level" => $this -> falsificationLevel);
	}

	public function getIndividualGiftsData() {
		return $this -> individualGifts;
	}
	
	public function getGiftValue($giftName) {
		return $this -> individualGifts[$giftName];
	}
	
	public function getAllGiftsData() {
		return array("Communication Gifts" => array_sum($this -> communicationGifts), "Caring Gifts" => array_sum($this -> caringGifts), "Corporate Gifts" => array_sum($this -> corporateGifts), "Captivating Gifts" => array_sum($this -> captivatingGifts)); 
	}

	public function getCommunicationGiftsJSON() {
		return $this -> getGiftsJSON($this -> communicationGifts);
	}
	
	public function getCaringGiftsJSON() {
		return $this -> getGiftsJSON($this -> caringGifts);
	}

	public function getCorporateJSON() {
		return $this -> getGiftsJSON($this -> corporateGifts);
	}

	public function getCaptivatingGiftsJSON() {
		return $this -> getGiftsJSON($this -> captivatingGifts);
	}
	
	public function getGiftsJSON($arr) {
		$newArray = array();
		foreach ($arr as $key => $value) {
			array_push($newArray, array('value' => $value, 'color' => $this ->getRandomColor(), 'highlight' => $this ->getRandomColor(), 'label' => $key));
		}
		return json_encode($newArray); 
	}
	
	public function getRandomColorPart() {
		return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
	}

	public function getRandomColor() {
		return "#" . $this -> getRandomColorPart() . $this -> getRandomColorPart() . $this -> getRandomColorPart();
	}

}
?>