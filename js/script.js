$(document).ready(function() {
	//Variable declarations
	page = '';
	module = '';

	//function calls
	hideAddIcons();	

	//---------- WATCHERS -------------//
	
	//Side Nav 
	$(".side-nav-btn").on('click', function() {		
		module = $(this).attr("data-module-id");		
		showModule();
	});

	//edit customer
	$(document).on('submit', '#editCustomer', function() {

		//Show Loader Image
		$("#loaderImage").show();
		page = $(this).attr("data-module-id");		
		//Post data from form
		$.post("edit_customer.php", $(this).serialize())
			.done(function(data) {
				console.log(data);
				$(".editModal").foundation("reveal","close");				
			});	
		showModule(page);	
		return false;					
	});

	//Edit vendor
	$(document).on('submit', '#editVendor', function() {
		//Show Loader Image
		$("#loaderImage").show();
		page = $(this).attr("data-module-id");		
		//Post data from form
		$.post("edit_vendor.php", $(this).serialize())
			.done(function(data) {
				console.log(data);
				$(".editModal").foundation("reveal","close");				
			});	
		showModule(page);	
		return false;					
	});

	//delete customer	
	$(document).on('submit', '#deleteCustomer', function() {
		
			//Show Loader Image
			$("#loaderImage").show();
			page = "customers";
			//Post data from form
			$.post("delete_customer.php", $(this).serialize())
				.done(function(data) {
					console.log(data);	
					$(".editModal").foundation("reveal","close");				
				});
			showModule(page);				
			return false;
		
	});

	//delete vendor
	$(document).on('submit', '#deleteVendor', function() {
			//Show Loader Image
			$("#loaderImage").show();
			page = "vendors";
			//Post data from form
			$.post("delete_vendor.php", $(this).serialize())
				.done(function(data) {
					console.log(data);	
					$(".editModal").foundation("reveal","close");				
				});
			showModule(page);				
			return false;
	});

	//Add Customer
	$(document).on('submit', '#addCustomer', function() {
		//Show Loader Image
		$("#loaderImage").show();
		page = $(this).attr("data-module-id");
		console.log(page);
		//Post data from form
		$.post("add_customer.php", $(this).serialize())
			.done(function(data) {
				console.log(data);
				$("#addCustomerModal").foundation("reveal","close");					
			});	
		showModule(page);			
		return false;		
	});

	//Add Vendor
	$(document).on('submit', '#addVendor', function() {
		//Show Loader Image
		$("#loaderImage").show();
		page = $(this).attr("data-module-id");
		console.log(page);
		//Post data from form
		$.post("add_vendor.php", $(this).serialize())
			.done(function(data) {
				console.log(data);
				$("#addVendorModal").foundation("reveal","close");					
			});	
		showModule(page);			
		return false;		
	});	
});

function showModule() {	
	//show loader image
	$("#loaderImage").show();
	//hide all add icons
	hideAddIcons();
	//Unload current module
	moduleUnload();	
	//Show add icon	
	showAddIcons(module);			
	//Load module page and timeout the loader image
	setTimeout("$('#pageContent').load(module, function() { $('#loaderImage').hide(); })", 1000);		
}

function hideAddIcons() {
	$(".add-icon").hide();
}

function showAddIcons(which) {	
	$(".side-nav-btn").filter("[data-module-id='" + which + "']").next().show();	
}

function moduleUnload() {
	$("#pageContent").empty();
}



