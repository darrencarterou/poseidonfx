<?php

//	$paid .= 'Bcc: darren@poseidonfx.com, darrencarter.ou@gmail.com, ';

	$paid .= 'Bcc: darren@poseidonfx.com, darrencarter.ou@gmail.com, josh@poseidonfx.com, john@poseidonfx.com, alex@poseidonfx.com, dbrownstein121@gmail.com,  FXtrader70@yahoo.com, ';


// AUTOMATICALLY EMAIL FREE USERS SIGNED UP IN LAST 30 DAYS or PREMIUM USERS

	$blogusers = get_users();

	$currentdate=date('Y-m-d H:i:s', strtotime("-30 days"));

	foreach ( $blogusers as $user ) {
		if(pmpro_hasMembershipLevel(1, ($user->ID))) 
		{
			if((strtotime($user->user_registered)) > $currentdate) 
			{
//				$free .= ($user->user_email) . ', ';
			}
		}
		elseif(pmpro_hasMembershipLevel(2, ($user->ID))) 
		{
				$paid .= ($user->user_email) . ', ';
		}
	} 

?>