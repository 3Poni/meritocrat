$(document).ready(function() {
    $('.dropdown-toggle').click(function() {
      if ($(this).next('.dropdown-menu').is(':visible')) {
        $(this).next('.dropdown-menu').hide();
      } else {
        $(this).next('.dropdown-menu').show();
      }
    });
  });
  