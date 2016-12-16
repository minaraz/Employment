$(document).ready(function() { 
    // call the tablesorter plugin 
    $("#job-table").tablesorter({ 
        // sort on the first column and third column, order asc 
        sortList: [[0,0],[2,0]] 
    }); 
}); 