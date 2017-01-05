<?php if ( ! defined('BASEPATH')) exit('No direct script access
allowed');
function describe_the_time($time_in) {
	define('SECOND', 1);
	define('MINUTE', 60 * SECOND);
	define('HOUR', 60 * MINUTE);
	define('DAY', 24 * HOUR);
	define('MONTH', 30 * DAY);
	define('YEAR', 12 * MONTH);
	$past_descriptions = array(
			1 => 'about a minute ago',
			2 => 'a few minutes ago',
			3 => 'within the last hour',
			4 => 'earlier today',
			5 => 'yesterday',
			6 => 'earlier this week',
			7 => 'earlier this month',
			8 => 'last month',
			9 => 'earlier this year',
			10 => 'last year',
			11 => 'a long time ago',
			12 => 'I don\'t know that time'
	);
	$future_descriptions = array(
			1 => 'a minute from now',
			2 => 'in the next few minutes',
			3 => 'in the next hour',
			4 => 'later today',
			5 => 'tomorrow',
			6 => 'later this week',
			7 => 'later this month',
			8 => 'next month',
			9 => 'later this year',
			10 => 'next year',
			11 => 'a long way off',
			12 => 'I don\'t know that time'
			);
			$now = time();
			if ($time_in < $now) {
				if ($time_in > $now - MINUTE) { // About a minute ago
					return $past_descriptions[1];
				} elseif ( ($time_in >= $now - (MINUTE * 5) ) && ($time_in <=$now ) ) { // A few minutes ago
							return $past_descriptions[2];
				} elseif ( ($time_in >= $now - (MINUTE * 60)) && ($time_in <=$now ) ) { // Within the last hour
							return $past_descriptions[3];
				} elseif ( ($time_in >= $now - (HOUR * 24)) && ($time_in <=$now - (MINUTE * 60) ) ) { // Earlier today
							return $past_descriptions[4];
				} elseif ( ($time_in >= $now - (HOUR * 48)) && ($time_in <=$now - (HOUR * 24) ) ) { // Yesterday
							return $past_descriptions[5];
				} elseif ( ($time_in >= $now - (DAY * 7)) && ($time_in <= $now- (HOUR * 48) ) ) { // Earlier this week
							return $past_descriptions[6];
				} elseif ( ($time_in >= $now - (DAY * 31)) && ($time_in <=$now - (DAY * 7) ) ) { // Earlier this month
							return $past_descriptions[7];
				} elseif ( ($time_in >= $now - (DAY * 62)) && ($time_in <=$now - (DAY * 31) ) ) { // Last Month
							return $past_descriptions[8];
				} elseif ( ($time_in >= $now - (MONTH * 12)) && ($time_in <=$now - (MONTH * 31) ) ) { // Earlier this year
							return $past_descriptions[9];
				} elseif ( ($time_in >= $now - (MONTH * 24)) && ($time_in <=$now - (MONTH * 12) ) ) { // Last year
							return $past_descriptions[10];
				} elseif ( ($time_in >= $now - (MONTH * 24) && ($time_in <=$now - (MONTH * 12) ) ) ){ // Last year
							return $past_descriptions[11];
							} else {
								return $past_descriptions[12];
							}
							} else {
								if ($time_in < $now + MINUTE) { // A minute from now
									return $future_descriptions[1];
								} elseif ( ($time_in <= $now + (MINUTE * 5) ) && ($time_in >=$now ) ) { // In the next few minutes
											return $future_descriptions[2];
								} elseif ( ($time_in <= $now + (MINUTE * 59)) && ($time_in >=$now ) ) { // In the next hour
											return $future_descriptions[3];
								} elseif ( ($time_in <= $now + (HOUR * 24)) && ($time_in >=$now + (MINUTE * 59) ) ) { // Later today
											return $future_descriptions[4];
								} elseif ( ($time_in <= $now + (HOUR * 48)) && ($time_in >=$now + (HOUR * 24) ) ) { // Yesterday
											return $future_descriptions[5];
								} elseif ( ($time_in <= $now + (DAY * 7)) && ($time_in >= $now+ (HOUR * 48) ) ) { // Earlier this week
											return $future_descriptions[6];
								} elseif ( ($time_in <= $now + (DAY * 31)) && ($time_in >=$now + (DAY * 7) ) ) { // Earlier this month
											return $future_descriptions[7];
								} elseif ( ($time_in <= $now + (DAY * 62)) && ($time_in >=$now + (DAY * 31) ) ) { // Last Month
											return $future_descriptions[8];
								} elseif ( ($time_in <= $now + (MONTH * 12)) && ($time_in >=$now + (MONTH * 31) ) ) { // Earlier this year
											return $future_descriptions[9];
								} elseif ( ($time_in <= $now + (MONTH * 24)) && ($time_in >=$now + (MONTH * 12) ) ) { // Last year
											return $future_descriptions[10];
								} elseif ( ($time_in <= $now + (MONTH * 24) ) ) { // Last year
									return $future_descriptions[11];
									} else {
										return $future_descriptions[12];
									}
									}
									}
									?>