
function show_inner_option(id_name) {
//  console.log('in');
document.getElementById(id_name).className = "display_on";
}
var slide_number=0;
function slide_nav() {
  //console.log('in');
  if (slide_number==0) {
document.getElementById('slide_nav').style.left = "0px";
slide_number=1;
}else {
  document.getElementById('slide_nav').style.left = "-2000px";
  slide_number=0;
}
}
function close_card(ids) {
document.getElementById(ids).style.top = "-2000px";
}
function open_card(ids) {
document.getElementById(ids).style.top = "70px";
}
var profile_number=0;
function profile_view() {
  //console.log("in");
  if (profile_number==0) {
      document.getElementById('profile_card').className = "Profile";
      profile_number=1;
  }else {
    document.getElementById('profile_card').className = "none_display";
    profile_number=0;

  }

}
