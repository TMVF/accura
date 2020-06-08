@extends('layout.app')

@section('body')

<br>
<a href="/member" class="btn btn-info">Back</a> 
	<h1>{{substr(Route::currentRouteName(),7)}} Member</h1>
	<div class="container">
  <form class="form-horizontal" action="/member/@yield('editId')" method="post">
  	{{csrf_field()}}
    @section('editMethod')
       @show
    <div class="form-group">
      <label class="control-label col-sm-2" >First Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname" value="@yield('editFname')" required>
      </div>
    </div>
       <div class="form-group">
      <label class="control-label col-sm-2" >Last Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname" value="@yield('editLname')" required>
      </div>
    </div>
         <div class="form-group">
      <label class="control-label col-sm-2" >Summery:</label>
      <div class="col-sm-10">
        <textarea class="form-control" rows="5" id="area" placeholder="Summery" name="area" required>@yield('editArea')</textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">DS Dvision:</label>
      <div class="col-sm-10">          
 <select id="ds" name="ds">
  <option value="@yield('editDs')">@yield('editDs')</option>
  <option value="Colombo 1">Colombo 1</option>
  <option value="Colombo 2">Colombo 2</option>
  <option value="Colombo 3">Colombo 3</option>
</select>
      </div>
    </div>
         <div class="form-group">
      <label class="control-label col-sm-2" >Date Of Brith:</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="dob"  name="dob" value="@yield('editDob')" required>
      </div>
    </div>
   <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
         <input type="reset" value="Clear" class="btn btn-info" />
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </form>
</div>

</div>

@endsection