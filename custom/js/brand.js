var manageBrandTable;

$(document).ready(function() {
	$('#navBrand').addClass('active');
	
	manageBrandTable = $("#manageBrandTable").DataTable({
		'ajax': 'php_action/fetchBrand.php',
		'order': []		
	});
	$("#submitBrandForm").unbind('submit').bind('submit', function() {
	$(".text-danger").remove();
	$('.form-group').removeClass('has-error').removeClass('has-success');			
	var brandName = $("#brandName").val();
	var brandStatus = $("#brandStatus").val();
	if(brandName == "") {
			$("#brandName").after('<p class="text-danger">masukan merk produk</p>');
			$('#brandName').closest('.form-group').addClass('has-error');
		} else {
			$("#brandName").find('.text-danger').remove();
			$("#brandName").closest('.form-group').addClass('has-success');	  	
		}
		if(brandStatus == "") {
			$("#brandStatus").after('<p class="text-danger">nama merk harus di isi</p>');
			$('#brandStatus').closest('.form-group').addClass('has-error');
		} else {
			$("#brandStatus").find('.text-danger').remove();
			$("#brandStatus").closest('.form-group').addClass('has-success');	  	
		}
		if(brandName && brandStatus) {
			var form = $(this);
			$("#createBrandBtn").button('loading');

			$.ajax({
				url : form.attr('action'),
				type: form.attr('method'),
				data: form.serialize(),
				dataType: 'json',
				success:function(response) {
					$("#createBrandBtn").button('reset');
					if(response.success == true) {
						manageBrandTable.ajax.reload(null, false);						
						$("#submitBrandForm")[0].reset();
						$(".text-danger").remove();
						$('.form-group').removeClass('has-error').removeClass('has-success');
  	  			$('#add-brand-messages').html('<div class="alert alert-success">'+
            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+ response.messages +
          '</div>');

  	  			$(".alert-success").delay(500).show(10, function() {
							$(this).delay(3000).hide(10, function() {
								$(this).remove();
							});
						}); 
					}  
				} 
			}); 	
		} 
		return false;
	}); 
});

function editBrands(brandId = null) {
	if(brandId) {
		$('#brandId').remove();
		$('.text-danger').remove();
		$('.form-group').removeClass('has-error').removeClass('has-success');
		$('.modal-loading').removeClass('div-hide');
		$('.edit-brand-result').addClass('div-hide');
		$('.editBrandFooter').addClass('div-hide');
		$.ajax({
			url: 'php_action/fetchSelectedBrand.php',
			type: 'post',
			data: {brandId : brandId},
			dataType: 'json',
			success:function(response) {
				$('.modal-loading').addClass('div-hide');
				$('.edit-brand-result').removeClass('div-hide');
				$('.editBrandFooter').removeClass('div-hide');
				$('#editBrandName').val(response.brand_name);
				$('#editBrandStatus').val(response.brand_active);
				$(".editBrandFooter").after('<input type="hidden" name="brandId" id="brandId" value="'+response.brand_id+'" />');
				$('#editBrandForm').unbind('submit').bind('submit', function() {
					$(".text-danger").remove();
					$('.form-group').removeClass('has-error').removeClass('has-success');			
					var brandName = $('#editBrandName').val();
					var brandStatus = $('#editBrandStatus').val();
					if(brandName == "") {
						$("#editBrandName").after('<p class="text-danger">Merk harus dimasukan</p>');
						$('#editBrandName').closest('.form-group').addClass('has-error');
					} else {
						$("#editBrandName").find('.text-danger').remove();
						$("#editBrandName").closest('.form-group').addClass('has-success');	  	
					}
					if(brandStatus == "") {
						$("#editBrandStatus").after('<p class="text-danger">Nama produk harus dimasukan</p>');
						$('#editBrandStatus').closest('.form-group').addClass('has-error');
					} else {
						$("#editBrandStatus").find('.text-danger').remove();
						$("#editBrandStatus").closest('.form-group').addClass('has-success');	  	
					}
					if(brandName && brandStatus) {
						var form = $(this);
						$('#editBrandBtn').button('loading');
						$.ajax({
							url: form.attr('action'),
							type: form.attr('method'),
							data: form.serialize(),
							dataType: 'json',
							success:function(response) {
								if(response.success == true) {
									console.log(response);
									$('#editBrandBtn').button('reset');
									manageBrandTable.ajax.reload(null, false);								  	  										
									$(".text-danger").remove();
									$('.form-group').removeClass('has-error').removeClass('has-success');
			  	  			$('#edit-brand-messages').html('<div class="alert alert-success">'+
			            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
			            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+ response.messages +
			          '</div>');

			  	  			$(".alert-success").delay(500).show(10, function() {
										$(this).delay(3000).hide(10, function() {
											$(this).remove();
										});
									});
								} 
									
							}
						});	 												
					} 
					return false;
				}); 
			} 
		}); 
	} else {
		alert('error!! Refresh the page again');
	}
}
function removeBrands(brandId = null) {
	if(brandId) {
		$('#removeBrandId').remove();
		$.ajax({
			url: 'php_action/fetchSelectedBrand.php',
			type: 'post',
			data: {brandId : brandId},
			dataType: 'json',
			success:function(response) {
				$('.removeBrandFooter').after('<input type="hidden" name="removeBrandId" id="removeBrandId" value="'+response.brand_id+'" /> ');
				$("#removeBrandBtn").unbind('click').bind('click', function() {
					$("#removeBrandBtn").button('loading');
					$.ajax({
						url: 'php_action/removeBrand.php',
						type: 'post',
						data: {brandId : brandId},
						dataType: 'json',
						success:function(response) {
							console.log(response);
							$("#removeBrandBtn").button('reset');
							if(response.success == true) {
								$('#removeMemberModal').modal('hide');
								manageBrandTable.ajax.reload(null, false);
								$('.remove-messages').html('<div class="alert alert-success">'+
			            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
			            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+ response.messages +
			          '</div>');

			  	  			$(".alert-success").delay(500).show(10, function() {
										$(this).delay(3000).hide(10, function() {
											$(this).remove();
										});
									}); 
							} else {
							} 
						} 
					}); 
				}); 
			} 
		}); 
		$('.removeBrandFooter').after();
	} else {
		alert('error!! Refresh the page again');
	}
} 