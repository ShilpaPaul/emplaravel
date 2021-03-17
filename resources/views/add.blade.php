@extends("theme")
@section("content")
   <div class="container">
   <div class="row">
   <div class="col">
    <table class="table">
      <tr>
          <td>NAME</td>
          <td><input type="text" class="form-control"></td>
      </tr>
      <tr>
          <td>EMP CODE</td>
          <td><input type="text" class="form-control"></td>
      </tr>
      <tr>
          <td>DESIGNATION</td>
          <td><input type="text" class="form-control"></td>
      </tr>
      <tr>
          <td>SALARY</td>
          <td><input type="text" class="form-control"></td>
      </tr>
      <tr>
          <td>DATE OF BIRTH</td>
          <td><input type="text" class="form-control"></td>
      </tr>
      <tr>
          <td>PLACE</td>
          <td><input type="text" class="form-control"></td>
      </tr>
      <tr>
          <td>PIN CODE</td>
          <td><input type="text" class="form-control"></td>
      </tr>
      <tr>
          <td>PHONE NUMBER</td>
          <td><input type="text" class="form-control"></td>
      </tr> </table>
      <CENTER>
      <button class="btn btn-primary">SUBMIT</button>
      </CENTER> 
    
   </div>
   </div>
   </div> 
@endsection

@section("heading")
ADD EMPLOYEE
@endsection