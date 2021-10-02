$(document).ready(function(){
	
	var dataTable = $('#datatablesSimple').DataTable({
		"processing" : true,
		"serverSide" : true,
		"order" : [],
		"ajax" : {
			url:"fetch.php",
			type: "POST"
		}
	
	});
	
	$('#column_name').selectpicker();

	$('#column_name').change(function(){

		var all_column = ["0", "1", "2", "3", "4", "5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28"];

		var remove_column = $('#column_name').val();

		var remaining_column = all_column.filter(function(obj) { 
			return remove_column.indexOf(obj) == -1; });

		dataTable.columns(remove_column).visible(false);

		dataTable.columns(remaining_column).visible(true);

	});

});	