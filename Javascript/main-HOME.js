var m_names = new Array("January", "February", "March","April", "May", "June", "July", "August", "September","October", "November", "December");

var d = new Date();
var curr_date = d.getDate();
var curr_month = d.getMonth();
var curr_year = d.getFullYear();
document.getElementById('date-event').innerHTML=curr_date + "  " + m_names[curr_month]+ "  " + curr_year;
