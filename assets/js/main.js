
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
