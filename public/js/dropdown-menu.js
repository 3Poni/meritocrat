let timer;
let canRun = true;
function toggleCanRun () {
    canRun = true;
    clearTimeout(timer);
};
$( ".dropdown-hover , .dropdown-list" ).hover(function() {
    if (canRun === true) {
        canRun = false;
        timer = setTimeout(toggleCanRun, 2000);
    }
    $(".dropdown-list").addClass( "show" );
  }, function() {
    if (canRun === true) {
        $(".dropdown-list").removeClass( "show" );
    }
  }
)
