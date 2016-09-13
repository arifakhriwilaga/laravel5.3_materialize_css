@extends('app')
@section('content')
   <div class="container">	
	<div class="row">
		<div class="col s12">
			&nbsp;
		</div>
   		<div class="col s4">
	   		<h3>Ari Fakhri</h3>
	   		<img src="img/profile.gif" class="circle responsive-img" width="200px" height="200px" alt="Responsive image">
	   </div>
		<div class="col s8">
			<div class="row">
				<div class="input-field col s4">
					<i class="material-icons prefix">email</i>
		 			<input id="example-email" type ="tel" class="validate">
		 			<label for="first_name">Email</label>
		 		</div>
			<div class="row">
				<div class="col s12">
				&nbsp;
				</div>
			</div>			
				<div class="input-field col s4">
					<i class="material-icons prefix">message</i>
		 			<input id="example-message" type="tel" class="validate">
		 			<label for="first_name">Message</label>
		 		</div>
		 	
				<div class="col s12">	 
					<button class="btn waves-effect waves-light" type="submit" name="action" onclick="Materialize.toast('For example', 3000) // 'rounded' is the class I'm applying to the toast">Submit
					    <i class="material-icons right">send</i>
					</button>
		 		</div>
 			</div> 				
		</div>
   </div>
</div>
@endsection