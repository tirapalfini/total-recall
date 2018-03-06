/*
Names: Group 10
Assignment: Total Recall
Class: CS361-400-W2017
*/

// basic jQuery code for login modal interactions on landing page
$(document).ready(function() {
    $('#createAccountModal').modal({
        show: false
    });
    $('#createAccountButton').on('click', function() {
        //$('#loginModal').modal('hide');
        $('#createAccountModal').modal('show');
    });
});