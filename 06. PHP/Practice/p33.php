<?php

/*
While working on long function, the codes in the function will be so many and it will reduce the readability of the codes. The best practice is to break the tasks of that function into pieces and make different functions with those and then call those in the main function. For example -
Let's say, we defined a function named completeOrder(). In the function, we have to work with - code for Database Connection, code for reducing product stock, code for changing in order status, code for calculating the total price, code for generating pdf invoice, and code for sending email. Now all of these small tasks can be defined in a single function, but these so many lines of codes will reduce readability of that function and will be harder to understand. So we will break these tasks in other functions and will call them in the functions according to our needs and orders.
 */

function completeOrder( $orderId ) {

    // code for Database Connection
    $databaseConnection = databaseConnection( $orderId );
    // code for reducing product stock
    $reduceProductStock = reduceProductStock( $orderId );
    // code for changing in order status
    $changeOrderStatus = changeOrderStatus( $orderId );
    // code for calculating the total price
    $calculateTotalPrice = calculateTotalPrice( $orderId );
    // code for generating pdf invoice
    $generatePdfInvoice = generatePdfInvoice( $orderId );
    // code for sending email
    $sendEmail = sendEmail( $orderId );
    return true;

}

// functions of small tasks
function databaseConnection( $orderId ) {

    // code for Database Connection
}

function reduceProductStock( $orderId ) {

    // code for reducing product stock
}

function changeOrderStatus( $orderId ) {

    // code for changing in order status
}

function calculateTotalPrice( $orderId ) {

    // code for calculating the total price
}

function generatePdfInvoice( $orderId ) {

    // code for generating pdf invoice
}

function sendEmail( $orderId ) {

    // code for sending email
}