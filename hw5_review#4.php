<?php
/**
 * Created by PhpStorm.
 * User: auremill
 * Date: 6/23/2015
 * Time: 7:15 PM
 */
//write function speedingTicket($speed, $limit) that calculates the cost of a
//speeding ticket based on your actual speed, $speed, and the speed limit, $limit.
//If you were speeding by less than 10mph over the limit, you will not get a ticket.
//If you were speeding by less



function speedingTickets($speed, $limit) {
    $amtOver = $speed - $limit;
    if ($amtOver < 10) {
        return 0;

    }else if ($amountOver>= 10 && $amountOver <= 15) {
        return 50 + 2 * $amtOver;{

        }
    }
}




?>