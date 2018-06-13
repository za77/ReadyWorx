function remove(url,id)
{
	UIkit.modal.confirm('Are you sure Delete?', function()

    	{
	    
	    var call = url+'/'+id;
	     
	     $.ajax({
	     	headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    },
		    url: call,
		    type: 'DELETE',
		    success: function(data, status) {
		    	UIkit.modal.alert('Confirmed!');
		        window.location.reload();
		    }
		}); 
	            
    	});
	
}
function status(url,id,status,only=0)
{
	$msg = status == 1 ? "Activate" : "Block"; 
	UIkit.modal.confirm('Are you sure '+$msg+' '+url+'?', function()

    	{
	    
	    var call = url+'/'+id;
	    data = {
	    	id:id,
	    	status:status,
	    	only:only
	    };
	     
	     $.ajax({
	     	headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    },
		    url: call,
		    data:data,
		    type: 'PUT',
		    success: function(data, status) {
		    	//alert(status);
		    	UIkit.modal.alert('Confirmed!');
		        window.location.reload();
		    }
		}); 
	            
    	});

}