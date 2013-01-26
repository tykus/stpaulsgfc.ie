<?php

class Competition extends Eloquent {
	
	    public function fixtures()
    	{
        	return $this->has_many('Fixture');
    	}

}
