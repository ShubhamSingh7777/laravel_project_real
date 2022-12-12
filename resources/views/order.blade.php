@extends('index')
@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th>sr no.</th>
            <th>tax</th>
            <th>total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>10</td>
            <td>{{$data}}</td>
        </tr>
    </tbody>
</table>
<form class="form-group" action="/orderinformation" method="POST">
    <h3>payment method</h3>
    @csrf
      <p>online payment <input type="radio" value="online" name="online" id=""></p>
      <p>UPI payment <input type="radio" value="UPI" name="online" id=""></p>
      <p>Case payment <input type="radio" value="Case" name="online" id=""></p>
      <p><button  type="submit" class="btn btn-primary"  name="submit">submit</button></p>
</form>
@endsection