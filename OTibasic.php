<?php
trait OTBasic{	
function InstallBasic($name = 'basic'){
		if ($this->not_exist($name)) {
			$this->ot_create($name);
		}
		$temp=$this->ot_addin($name,$name,'features.json');
		$this->ot_addin($name,'owner','features.json','usr/admin');
		$this->ot_addin($name,array('Name'=>'Groups Feature','limit'=>0,'OnUse'=>0),'container.json');
		$this->ot_array(array('nick'=>'Groups','name'=>'Groups Feature'), 'admin.json', TRUE,$name);
		$this->ot_addin('admin','owner','users.json',$name);			
		$this->ot_addin('index','Main index','index.bas','basic');
		$this->ot_addin($this->id,'owner','index.bus','basic');
		
		$this->ErrAdd('C0010M027',"Invalid structur, can't lock");
		$this->ErrAdd('C0010M028',"Lock Fail, allready locked");
		$this->ErrAdd('C0010M029',"Not Locked");
		$this->ErrAdd('C0010M030',"Not enougth level");
		$this->ErrAdd('C0010M031',"A table is allready open");
		$this->ErrAdd('C0010M032',"All tables are close");
		$this->ErrAdd('C0010M033',"Mising record");
		$this->ErrAdd('C0010M036',"Mising Field");
		$this->ErrAdd('C0010M037',"Leng violation must be at less 8 character");		
		$this->ErrAdd('C0010M038',"Access grant to 'Anonimus' nor requiered");		
	}
}
?>