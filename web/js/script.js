var testApp = angular.module('app',[]);

testApp.controller('testCtrl', function($scope){
  $scope.updateArticles = false;
});

// $(document).ready(function () {
//   $('.li_index').on('click', function(){
//     $('.caroussel-display').css('display', 'none');
// }}));





var slideIndex = 0;
showSlides();

function showSlides() {
var i;
var slides = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("dot");
for (i = 0; i < slides.length; i++) {
   slides[i].style.display = "none";
}
slideIndex++;
if (slideIndex> slides.length) {slideIndex = 1}
for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
}
slides[slideIndex-1].style.display = "block";
dots[slideIndex-1].className += " active";
setTimeout(showSlides, 4000); // Change image every 4 seconds
}
