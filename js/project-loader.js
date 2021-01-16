var projeto1 = document.getElementById('projeto1');
var projeto2 = document.getElementById('projeto2');
var projeto3 = document.getElementById('projeto3');


projeto1.onended = function() {
  projeto2.play(); 
  projeto1.style.opacity=0;
  projeto2.style.opacity=1; 
}

projeto2.onended = function() {
  projeto3.play();  
  projeto2.style.opacity=0;
  projeto3.style.opacity=1; 
}

projeto3.onended = function() {
  projeto1.play();  
  projeto3.style.opacity=0;
  projeto1.style.opacity=1; 
}