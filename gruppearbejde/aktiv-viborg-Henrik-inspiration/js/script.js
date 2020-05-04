$(document).ready(function () {
        $('#myModal').on('show.bs.modal', function (e) {
            var image = $(e.relatedTarget).attr('src');
            $(".img-responsive").attr("src", image);
        });
});

  
$(document).ready(function(){

var events_loaded = Number($('#result_no').val());
document.getElementById('events-loaded').innerHTML = events_loaded + " events indlæst";
 $("#load").click(function(){

  var row = Number($('#result_no').val());
  var allcount = Number($('#allcount_val').val());


  
  if(row <= allcount){
  loadmore();


} else{
  //document.getElementById("load").value = 'No more results';
}


 });
});





function loadmore()
{
 var val = document.getElementById("result_no").value;
 $.ajax({
 type: 'post',
 url: 'elements/load-more.php',
 data: {
  getresult:val
 },
 success: function (response) {
  var content = document.getElementById("result_para");
  content.innerHTML = content.innerHTML+response;

  // We increase the value by 2 because we limit the results by 2
  document.getElementById("result_no").value = Number(val)+2;

  document.getElementById("result_val").value = Number(val);

  var row = Number($('#result_no').val());

  var allcount = Number($('#allcount_val').val());

document.getElementById('events-loaded').innerHTML = row + " events indlæst";

if(row >= allcount){
  //document.getElementById("load").type = 'hidden';
  document.getElementById("load").type = 'hidden';
  document.getElementById("result_no").value = '0';
  document.getElementById('no-more-events').innerHTML = "Ikke flere events"
}
 }
 });
}