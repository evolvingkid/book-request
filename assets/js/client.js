      //Number of banner Got From the Database
var Banner_Timer=0;
var Previous_Timer=0;
function Banner_Transaction(Changer_Value) {
if (Changer_Value==1) {
Banner_Timer--;
}
if (Changer_Value==0) {
Banner_Timer++;
}
if (Banner_Timer<0) {
Banner_Timer=Banner_Count-1;
}
if (Banner_Timer>Banner_Count-1) {
Banner_Timer=0;
}
//console.log(Banner_Timer);
document.getElementsByClassName("Banner_Img")[Previous_Timer].style.opacity=0;
document.getElementsByClassName("Banner_Img")[Banner_Timer].style.opacity=1;
Previous_Timer=Banner_Timer;
}
Banner_Transaction();
