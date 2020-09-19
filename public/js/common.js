$(document).ready(function(){

	function checkSlug(slug, count){
		$.ajax({
			type:'POST',
			url:"{{ route('admin.page.slugExist') }}/"+slug,
			data:{
				_token: '{{ csrf_token() }}',
				'slug':slug,
			},
			dataType: 'json',
			success: function(data){
				if(data.exist){
					count=count+1;
					slug = slug+"-"+count;
					checkSlug(slug, count);
				}else{
					$("#slug").val(slug);
				}
			},
			error: function(xhr, err, z){}
		});
	}
	
});
