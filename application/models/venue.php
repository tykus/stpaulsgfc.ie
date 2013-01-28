<?php

class Venue extends Eloquent
{
		// Association - belongs_to Team
	    public function team()
    	{
        	return $this->belongs_to('Team');
    	}	
	
}
