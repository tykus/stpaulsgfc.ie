<?php

class Venue extends EloquentTest
{
		// Association - belongs_to Team
	    public function team()
    	{
        	return $this->belongs_to('Team');
    	}
	
	
}
