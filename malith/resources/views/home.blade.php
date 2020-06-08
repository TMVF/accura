@extends('layout.app')

@section('body')
   <br>
   <a href="member/create" class="btn btn-info">Add New</a>
  
   	<center><h1>Accura Member List</h1></center>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for First Name.." title="Type in a name">
      <table id="myTable" style="text-align:center;" >
   <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Date of Birth</th>
      <th>DS Division</th>
      <th>Delete</th>
      <th>Edit</th>
   </tr>
    
@foreach($members as $member)



   <tr>
      <td>{{$member->fname}}</td>
      <td>{{$member->lname}}</td>
      <td>{{$member->dob}}</td>
      <td>{{$member->ds}}</td>
      <td><form action="{{'/member/'.$member->id}}" method="post">
         {{csrf_field()}}
         {{ method_field('DELETE')}}
         <center><button type="submit" style="color: red;" ><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button></center></form></td>
      <td><a href="{{'/member/'.$member->id.'/edit'}}">Edit</a></td>   
         
        </tr>

@endforeach

</table> 
<br>
@include('partials.success')
   
@endsection

 <script type="text/javascript">
            
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

        </script>