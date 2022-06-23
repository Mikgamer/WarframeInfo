$(document).ready(function(){

	$('#articlee').DataTable( {
		responsive: true,
		autoWidth: false,
		lengthMenu: [5 , 10, 20],
		language: {
			lengthMenu: "Afficher _MENU_ éléments par page",
			zeroRecords: "Il n'y a rien ici",
			info: "Page _PAGE_ / _PAGES_",
			infoEmpty: "Rien n\'a été trouvé",
			infoFiltered:   "(filtré parmi _MAX_ éléments)",
			paginate: {
				first:      "<<",
				last:       ">>",
				next:       ">",
				previous:   "<"
			},
		},
		columnDefs: [
		{targets:1,visible:false},
		//{targets:"_all",className:"dt-tag"},
		{orderData:1,targets:0}
		],
		order: [1, "desc"],

	} );
});

