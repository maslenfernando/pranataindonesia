
var path = window.location.pathname;
var host = window.location.hostname;

$(function() {

$(window).hashchange(function() {
  var hash = $.param.fragment();
  
  if(hash == 'tambah') {
    if(path.search('belakang/artikel') > 0) {
      $('#myModal .modal-header #myModalLabel').text('Tambah Artikel');
      $('#myModal .modal-footer #submit-artikel').text('Tambah!');
      $('#myModal #form-artikel').attr('action', 'tambah');
    }

    $('#myModal').addClass('big-modal');
    $('#myModal').modal('show');
  
  } else if(hash.search('edit') == 'edit') {
    if(path.search('belakang/artikel') > 0) {
      $('#myModal .modal-header #myModalLabel').text('Edit Artikel');
      $('#myModal .modal-footer #submit-artikel').text('Update!');
      $('#myModal #form-artikel').attr('action', 'update');
    }

    $('#myModal').addClass('big-modal');
    $('#myModal').modal('show');
    

  } else if(hash == 'hapus') {


  } else if(hash == 'ambil') {


  } else if(hash == 'mass') {

  }

});

$(window).trigger('hashchange');

$('#myModal').on('hidden', function(){
  window.history.pushState(null, null, path);
})

});



var lineChartData = {
    labels: ["23", "25", "25", "26", "27"],
    datasets: [
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    pointColor: "rgba(151,187,205,1)",
				    pointStrokeColor: "#fff",
				    data: [2700, 2700, 2900, 2600, 2900]
				}
    ]

}

var myLine = new Chart(document.getElementById("area-chart").getContext("2d")).Line(lineChartData);

