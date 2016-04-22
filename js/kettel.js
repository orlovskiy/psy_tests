window.onload = function () {

n=document.getElementsByClassName('question');

var q=0;
var countChecked = function() {
  var q = $( "input[class=options]:checked" ).length;
  $( ".counter" ).text( q  + " из " +n.length );
  if (q != n.length){
	document.getElementById('subm').setAttribute('disabled', 'disabled');
}
};
countChecked();
 
$( "input[class=options]" ).on( "click", countChecked);

$('#res').on('click',function(){
	var c = confirm('Сбросить введенные данные?');
	if(c==true){
		$( ".counter" ).text( q  + " из " +n.length );
	}
	return c;
});


}