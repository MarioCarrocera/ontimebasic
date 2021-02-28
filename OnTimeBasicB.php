<?php
trait BasicB{	
	function ShwFtrBsc(){
		$retval=[];
		foreach ($this->features as $clave => $valor) {
    		if ($this->ot_qexist('index.bas',$clave)){
    			$tmp = $this->ot_read('admin.json',$clave);
    			$retval[$clave]='('.$tmp['nick'].')'.$tmp['name'];
    		}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $retval );
		return $retval;
	}	
	function ShwBscIn($feature='basic'){
		if ($this->ot_safety('index','b',$feature)){
			$this->retval = $this->ot_readif('index.bas',$feature);
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}	
	function ShwCntIn($content,$feature='basic'){
		if ($this->ot_safety($content,'b',$feature)){
			$this->retval = $this->ot_readif($content.'.bas',$feature);
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}	
	function ShwCntInSft($content,$feature='basic'){
		$retval = [];
		$record = 1;
		$tmp = $this->ot_readif($content.'.bus',$feature);
		foreach ($tmp as $clave => $valor) {				
			$retval[$record]=array($clave=>$valor." (user)");
			$record=$record+1;
		}
		$tmp = $this->ot_readif($content.'.bgr',$feature);
		foreach ($tmp as $clave => $valor) {				
			$retval[$record]=array($clave=>$valor." (group)");
			$record=$record+1;
		}		
		if ($this->ot_exist($content.'.bpl',$feature)){
			$retval[$record]=array('Public'=>'Online avaible for read');
			$record=$record+1;
		}
		if ($this->ot_exist($content.'.ban',$feature)){
			$retval[$record]=array('Anonimus'=>'Allways avaible for read');
			$record=$record+1;
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $retval;
	}	
}
?>