<?php
include_once("OnTimeAllways.php");
include_once("OnTimeFunctions.php");
include_once("OnTimeContent.php");
include_once("OnTimeConvert.php");
include_once("OnTimeCripto.php");
include_once("OnTimeDebug.php");
include_once("OnTimeCoreA.php");
include_once("OnTimeCoreB.php");
include_once("OnTimeGrpsA.php");
include_once("OnTimeGrpsB.php");
include_once("OnTimeBasicA.php");
include_once("OnTimeBasicB.php");
class OnTime{
	use CoreA;
	use CoreB;
	use GrpsA;
	use GrpsB;
	use BasicA;
	use BasicB;
	use Allways;
	use Functions;
	use Content;
	use Convert;	
	use Cripto;
	use Debug;
}?>