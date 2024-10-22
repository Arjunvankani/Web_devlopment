

<?php  

function draw_calendar($month,$year){

	/* draw table */
	$calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';

	/* table headings */
	$headings = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
	$calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';

	/* days and weeks vars now ... */
	$running_day = date('w',mktime(0,0,0,$month,1,$year));
	$days_in_month = date('t',mktime(0,0,0,$month,1,$year));
	$days_in_this_week = 1;
	$day_counter = 0;
	$dates_array = array();

	/* row for week one */
	$calendar.= '<tr class="calendar-row">';

	/* print "blank" days until the first of the current week */
	for($x = 0; $x < $running_day; $x++):
		$calendar.= '<td class="calendar-day-np"> </td>';
		$days_in_this_week++;
	endfor;

	/* keep going with days.... */
	for($list_day = 1; $list_day <= $days_in_month; $list_day++):
		$calendar.= '<td class="calendar-day">';
			/* add in the day number */
			$calendar.= '<div class="day-number">'.$list_day.'</div>';

			/** QUERY THE DATABASE FOR AN ENTRY FOR THIS DAY !!  IF MATCHES FOUND, PRINT THEM !! **/
			$calendar.= str_repeat('<p> </p>',2);
			
		$calendar.= '</td>';
		if($running_day == 6):
			$calendar.= '</tr>';
			if(($day_counter+1) != $days_in_month):
				$calendar.= '<tr class="calendar-row">';
			endif;
			$running_day = -1;
			$days_in_this_week = 0;
		endif;
		$days_in_this_week++; $running_day++; $day_counter++;
	endfor;

	/* finish the rest of the days in the week */
	if($days_in_this_week < 8):
		for($x = 1; $x <= (8 - $days_in_this_week); $x++):
			$calendar.= '<td class="calendar-day-np"> </td>';
		endfor;
	endif;

	/* final row */
	$calendar.= '</tr>';

	/* end the table */
	$calendar.= '</table>';
	
	/* all done, return result */
	return $calendar;
}

/* sample usages */
echo '<h2>Jan 2k20</h2>';
echo draw_calendar(1,2020);

echo '<h2>Febuary 2k20</h2>';
echo draw_calendar(2,2020);

echo '<h2>March 2020</h2>';
echo draw_calendar(3,2020);
echo '<h2>April 2020</h2>';
echo draw_calendar(4,2020);

echo '<h2>May 2020</h2>';
echo draw_calendar(5,2020);
echo '<h2>Jun 2020</h2>';
echo draw_calendar(6,2020);
echo '<h2>July 2020</h2>';
echo draw_calendar(7,2020);
echo '<h2>Augest 2020</h2>';
echo draw_calendar(8,2020);
echo '<h2>September 2020</h2>';
echo draw_calendar(9,2020);
echo '<h2>Octomber 2020</h2>';
echo draw_calendar(10,2020);
echo '<h2>November 2020</h2>';
echo draw_calendar(11,2020); 
echo '<h2>December 2020</h2>';
echo draw_calendar(12,2020);  ?>
