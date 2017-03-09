@extends('layout')

@section ('title')
	REST API | Home
@stop

@section('main-content')
	<h1>Welcome</h1>

	<table class="table table-bordered">
		<tr>
			<th>Project Name</th>
			<th>Date of Creation</th>
			<th>Contributions</th>
		</tr>

		<tr>
			<td>{{$project->name}}</td>
			<td>{{$project->created_at}}</td>
	
		</tr>

		
	</table>

	<div class="row">
		<a id="contributions" class="btn btn-primary">Show contributions</a>
	</div>

	<p id="contributionsinfo"></p>

<script type="text/javascript">
	 $(document).ready(function() {
        $('a[id="contributions"]').on('click', function() {
            var userID = $(this).text();
            if(userID) {
                $.ajax({
                    url: '/myform/ajax/'+userID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {

                        
                        $('p[id="contributionsinfo"]').empty();
                        $.each(data, function(key, value) {
                            $('p[id="contributionsinfo"]').append('<p value="'+ key +'">'+ value +'</p>');
                        });

                    }
                });
            }else{
                $('p[id="contributionsinfo"]').empty();
            }
        });
    });
</script>
@stop

