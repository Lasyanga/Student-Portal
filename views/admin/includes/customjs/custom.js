function openNav() {
  document.getElementById("mySidenav").style.width = "250px";

  jQuery('#menu_btn').removeClass('menu-btn');
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";

  jQuery('#menu_btn').addClass('menu-btn');
}

function load_page(page){
  $.blockUI({ css: {
    border: 'none',
    padding: '20px',
    fontSize: '10px',
    backgroundColor: '#000',
    '-webkit-border-radius': '10px',
    '-moz-border-radius': '10px',
    opacity: .5,
    color: '#fff'
  } });
  window.location.href = page

  setTimeout($.unblockUI, 6000);
}

function page_title(title){
  document.title = title;
}