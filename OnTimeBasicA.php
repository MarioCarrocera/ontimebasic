<?php
trait BasicA{	
	function CrtFtrBsc($feature){
		if ($this->ot_can('create','basic') and $this->ot_can('create',$feature)) {
			if ($this->ot_exist($feature)){
				if ($this->not_exist('index.bas',$feature)){
					$this->ot_addin('index','Main index','index.bas',$feature);
					$this->ot_addin($this->id,'owner','index.bus',$feature);
					$this->ot_addin('index','owner',$feature.'.acc','usr/'.$this->id);
				}
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}
	function AddCntIn($code,$desc, $feature='basic'){
		$safety= $this->ot_safety_level('index','b',$feature);
		if ($this->ot_level($safety,"change")){
   			$tmp = $this->ot_readif('index.bas',$feature);
			if ( $this->not_in($code,$tmp) ){
				$this->ot_addin($code,$desc,'index.bas',$feature);
				$this->ot_addin($this->id,'owner',$code.'.bus',$feature);
				$this->ot_addin($code,'owner',$feature.'.acc','usr/'.$this->id);
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}
	function InsCntIn($data,$value,$code, $feature='basic'){
		$safety= $this->ot_safety_level($code,'b',$feature);
		if ($this->ot_level($safety,"insert")){
   			$tmp = $this->ot_readif('index.bas',$feature);
			if ( $this->ot_in($code,$tmp) ){
				$this->ot_addin($data,$value,$code.'.bas',$feature);
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}
	function UpnCntIn($data,$value,$code, $feature='basic'){
		$safety= $this->ot_safety_level($code,'b',$feature);
		if ($this->ot_level($safety,"insert")){
   			$tmp = $this->ot_readif('index.bas',$feature);
			if ( $this->ot_in($code,$tmp) ){
				$this->ot_addchangein($data,$value,$code.'.bas',$feature);
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}
	function UpdCntIn($data,$value,$code, $feature='basic'){
		$safety= $this->ot_safety_level($code,'b',$feature);
		if ($this->ot_level($safety,"update")){
   			$tmp = $this->ot_readif('index.bas',$feature);
			if ( $this->ot_in($code,$tmp) ){
				$this->ot_changein($data,$value,$code.'.bas',$feature);
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}
	function DltCntIn($data,$code, $feature='basic'){
		$safety= $this->ot_safety_level($code,'b',$feature);
		if ($this->ot_level($safety,"delete")){
   			$tmp = $this->ot_readif('index.bas',$feature);
			if ( $this->ot_in($code,$tmp) ){
				$this->ot_deletein($data,$code.'.bas',$feature);
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}
	function RmvCntIn($code, $feature='basic'){
		$safety= $this->ot_safety_level('index','b',$feature);
		if ($this->ot_level($safety,"change")){
   			$tmp = $this->ot_readif('index.bas',$feature);
			if ( $this->ot_in($code,$tmp) ){
				$this->ot_deleteinside($code.'.ban',$feature);
				$this->ot_deleteinside($code.'.bpl',$feature);
	   			$tmp = $this->ot_readif($code.'.bgr',$feature);
				foreach ($tmp as $clave => $valor) {
					$this->ot_deletein($code, $feature.'.acc','grp/'.$clave);
				}
				$this->ot_deleteinside($code.'.bgr',$feature);
	   			$tmp = $this->ot_readif($code.'.bus',$feature);
				foreach ($tmp as $clave => $valor) {
					$this->ot_deletein($code, $feature.'.acc','usr/'.$clave);
				}
				$this->ot_deleteinside($code.'.bus',$feature);
				$this->ot_deleteinside($code.'.bas',$feature);
				$this->ot_deletein($code,'index.bas',$feature);
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}
	function AnnBscInAdd($code, $feature='basic'){
		$safety= $this->ot_safety_level($code,'b',$feature);
		if ($this->ot_level($safety,"create")){
			if ($this->not_exist($code.'.ban',$feature)){
				$this->ot_addin($this->id,'owner',$code.'.ban',$feature);				
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}
	function AnnBscInRmv($code, $feature='basic'){
		$safety= $this->ot_safety_level($code,'b',$feature);
		if ($this->ot_level($safety,"remove")){
			if ($this->ot_exist($code.'.ban',$feature)){
				$this->ot_deleteinside($code.'.ban',$feature);
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}
	function PblBscInAdd($code, $feature='basic'){
		$safety= $this->ot_safety_level($code,'b',$feature);
		if ($this->ot_level($safety,"create")){
			if ($this->not_exist($code.'.ban',$feature,"C0010M038")){
				if ($this->not_exist($code.'.bpl',$feature)){			
					$this->ot_addin($this->id,'owner',$code.'.bpl',$feature);
				}				
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}
	function PblBscInRmv($code, $feature='basic'){
		$safety= $this->ot_safety_level($code,'b',$feature);
		if ($this->ot_level($safety,"remove")){
			if ($this->ot_exist($code.'.bpl',$feature)){
				$this->ot_deleteinside($code.'.bpl',$feature);
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}
	function UsrBscInAdd($code, $user, $level ,$feature='basic'){
		$safety= $this->ot_safety_level($code,'b',$feature);
		if ($this->ot_level($safety,"create")){
			if ($this->ot_exist($user,'usr')) {
				if ($this->ot_in($level,$this->level)) {
					if ($this->ot_exist($code.'.bas',$feature)) {
						$this->ot_addin($user,$level,$code.'.bus',$feature);
						$this->ot_addin($code,$level,$feature.'.acc','usr/'.$user);	
					}
				}				
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}
	function GrpBscInAdd($code, $group, $level ,$feature='basic'){
		if ($this->ot_feature('grp')){
			$safety= $this->ot_safety_level($code,'b',$feature);
			if ($this->ot_level($safety,"create")){
				if ($this->ot_exist($group,'grp')) {
					if ($this->ot_in($level,$this->level)) {
						if ($this->ot_exist($code.'.bas',$feature)) {
							$this->ot_addin($group,$level,$code.'.bgr',$feature);
							$this->ot_addin($code,$level,$feature.'.acc','grp/'.$group);	
						}				
					}
				}
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}
	function UsrBscInChg($code, $user, $level ,$feature='basic'){
		$safety= $this->ot_safety_level($code,'b',$feature);
		if ($this->ot_level($safety,"change")){
			if ($this->ot_exist($user,'usr')) {
				if ($this->ot_in($level,$this->level)) {
					if ($this->ot_exist($code.'.bas',$feature)) {
						$this->ot_changein($user,$level,$code.'.bus',$feature);
						$this->ot_changein($code,$level,$feature.'.acc','usr/'.$user);	
					}
				}				
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}
	function GrpBscInChg($code, $group, $level ,$feature='basic'){
		if ($this->ot_feature('grp')){
			$safety= $this->ot_safety_level($code,'b',$feature);
			if ($this->ot_level($safety,"create")){
				if ($this->ot_exist($group,'grp')) {
					if ($this->ot_in($level,$this->level)) {
						if ($this->ot_exist($code.'.bas',$feature)) {
							$this->ot_changein($group,$level,$code.'.bgr',$feature);
							$this->ot_changein($code,$level,$feature.'.acc','grp/'.$group);	
						}				
					}
				}
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}
	function UsrBscInDlt($code, $user, $feature='basic'){
		$safety= $this->ot_safety_level($code,'b',$feature);
		if ($this->ot_level($safety,"remove")){
			if ($this->ot_exist($user,'usr')) {
				if ($this->ot_exist($code.'.bas',$feature)) {
					$this->ot_deletein($user,$code.'.bus',$feature);
					$this->ot_deletein($code,$feature.'.acc','usr/'.$user);	
				}				
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}
	function GrpBscInDlt($code, $group, $level ,$feature='basic'){
		if ($this->ot_feature('grp')){
			$safety= $this->ot_safety_level($code,'b',$feature);
			if ($this->ot_level($safety,"remove")){
				if ($this->ot_exist($group,'grp')) {
					if ($this->ot_exist($code.'.bas',$feature)) {
						$this->ot_deletein($group,$level,$code.'.bgr',$feature);
						$this->ot_deletein($code,$level,$feature.'.acc','grp/'.$group);	
					}
				}
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}
}
?>