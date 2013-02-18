<?php

class Fixture extends Eloquent {

	    public function competition()
    	{
        	return $this->belongs_to('Competition');
    	}
		
	    public function venue()
    	{
        	return $this->belongs_to('Venue');
    	}

		
	    public function team()
    	{
        	return $this->belongs_to('Team');
    	}
		
		
		
						
		// Validation rules
		// ---------------- 
		public static $rules = array(
			//'name' => 'required|min:2|unique:teams,name'
			'team_id' => 'required|integer',
			'competition_id' => 'required|integer'
		);
		
		/* validate($data)
		 * ===============
		 * Validate the data passed in against the rules 
		 */
		public static function validate($data)
		{
			return Validator::make($data, static::$rules);
		}
		
		
		
		/* get_result()
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
			
			// Check if there is a score entered for the fixture
			if (is_null($our_g) || is_null($our_p) || is_null($opp_g) || is_null($opp_p)) 
			{
				return array(
					'our_score' => "<i>tbc</i>",
					'opp_score' => ""
				);
			}
			else
			{
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
				
				
				// Return an array with scores as formatted strings (0-00)
				return array(
					'our_score' => $our_score_str,
					'opp_score' => $opp_score_str
				);
			}
		}
		
		public static function next()
		{
			return Fixture::where('date', '>=', date('Y-m-d'))
					->order_by('date')->first();
		}
		
		
		public static function prev()
		{
			return Fixture::where('date', '<=', date('Y-m-d'))
					->where('time', '<=', date('H:i:s'))
					->order_by('date', 'desc')->first();
		}

}