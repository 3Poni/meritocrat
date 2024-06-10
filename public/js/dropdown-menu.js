$( ".dropdown-hover , .dropdown-list" ).hover(function() {
    $(".dropdown-list").addClass( "show" );
    console.log("yes")
  }, function() {
    $(".dropdown-list").removeClass( "show" );
    console.log("no")
  }
)