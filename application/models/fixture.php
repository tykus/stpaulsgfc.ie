<?php

class Fixture extends Eloquent {

	    public function competition()
    	{
        	return $this->belongs_to('Competition');
    	}


	    public function team()
    	{
        	return $this->belongs_to('Team');
    	}
		
		
	/*
	 * get_result()
	 * ============
	 * Determines the result of a fixture by calculating the total score for team1 and team2 
	 * and returns an array of strings for each.
	 */
		public function get_result()
		{
			// Get the scores for the current fixture instance
			$our_g = $this->get_attribute('our_goals');
			$our_p = str_pad($this->get_attribute('our_points'), 2, '0', STR_PAD_LEFT);
			$opp_g = $this->get_attribute('opp_goals');
			$opp_p = str_pad($this->get_attribute('opp_points'), 2, '0', STR_PAD_LEFT);
			
			// Determine winner
			$our_score = $our_g * 3 + $our_p;
			$opp_score = $opp_g * 3 + $opp_p;
			
			if ($our_score > $opp_score) {
				$our_score_str = "<b>" . $our_g . "-" . $our_p . "</b>";	
				$opp_score_str = $opp_g . "-" . $opp_p;		
			} elseif ($our_score < $opp_score) {
				$our_score_str = $our_g . "-" . $our_p;	
				$opp_score_str = "<b>" . $opp_g . "-" . $opp_p . "</b>";		
			} else {
				$our_score_str = $our_g . "-" . $our_p;	
				$opp_score_str = $opp_g . "-" . $opp_p;								
			}
			
			
			// Return an array with formatted strings for the scores
			return array(
				'our_score' => $our_score_str,
				'opp_score' => $opp_score_str
			);
			
		}


}