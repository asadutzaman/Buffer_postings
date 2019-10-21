@extends('layouts.app')
@section('content')
<div class="container-fluid app-body">
	<h3>Social Accounts 

	




	</h3>

	<div class="row">
		<div class="col-md-12">
			<table class="table table-hover social-accounts"> 
				<thead> 
					<tr>
						<div class="row">
							
							<div class="col-md-4">Date
							<div class="form-group col-md-12">
									<input type="text" name="serach" placeholder="Search" id="serach" class="form-control" />
								</div>
							</div>
							<div class="col-md-4">Group
								<div class="form-group col-md-6">
									<div class="form-group">
										<label for="exampleFormControlSelect1">Example select</label>
										
											
											<select class="form-control" id="changegroup">
											@foreach($group as $groupi)
												<option data-type="group_id" id='group_id' name='group_id' value="{{ $groupi->group_id }}">{{ $groupi->group_id }}</option>
											@endforeach
											
											</select>
											<button class="success" name="submit" type="submit" value="Submit">Submit </button>
										
									</div>
								</div>
							</div>
						</div>
					</tr>
					<tr><th>user_id</th> <th>group_id</th> <th>post_id</th> <th>account_id</th> <th>account_service</th> <th>buffer_post_id</th> <th>post_text</th> </tr> 
				</thead> 
				<tbody> 
				@include('pages.show_data')		
				</tbody> 
			</table>
		</div>
	</div>
</div>
<script type="text/javascript">
    
    //group data
    $(function () {
        $('changegroup').on('change', function (e) {
            e.preventDefault();
            var group_id = document.getElementById("group_id").value;
            // alert(group_id);
            $.ajax({
                type: 'get',
                url: 'group_id_data',
                data: $('form').serialize(),
                success:function(data){
                    $('tbody').html('');
                    $('tbody').html(data);
                }
            });
        });
    });
    </script>
   
@endsection
