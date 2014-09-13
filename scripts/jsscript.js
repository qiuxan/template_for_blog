window.onload=window.onresize=function(){
if(document.getElementById("right_content").clientHeight<document.getElementById("left_content").clientHeight){
document.getElementById("right_content").style.height=document.getElementById("left_content").offsetHeight+"px";
}
else{
document.getElementById("left_content").style.height=document.getElementById("right_content").offsetHeight+"px";
}
}