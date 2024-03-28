// todays-date
$(document).ready(function() {
    todaysDate();

    // Toggle theme here
    $(".theme-switch").click(function(){
        $("body").toggleClass("dark-theme");
        alert('theme-switch function is still under construction...');
    });

    // toggel master menu
    $("#memenu_trigger").click(function(){

        $("#memenu_trigger").toggleClass("active");
        $("#panel-menu").toggleClass("mm-panel_opened-parent");

        document.getElementById("slide_menu").classList.add("mm-menu_opened");


    });


});

function todaysDate() {
    var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
      var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

      var currentDate = new Date();
      var dayOfWeek = days[currentDate.getDay()];
      var month = months[currentDate.getMonth()];
      var dayOfMonth = currentDate.getDate();
      var year = currentDate.getFullYear();
      var formattedDate = dayOfWeek + ', ' + month + ' ' + dayOfMonth + ', ' + year;
      $('#todays-date').text(formattedDate);
}
