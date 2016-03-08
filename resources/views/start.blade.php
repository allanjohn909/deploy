@extends('app')

@section('text')

  <strong>Server List</strong>

@endsection

@section('content')

	<div class="container">
		<div class="wrapper">
    		<div class="jumbotron">       
      			<button class="btn btn-lg btn-primary" style="float: right; margin-top: -95px;" type="submit">Add Server</button> 
            <section class="panel panel-default">
              <header class="panel-heading">
                <h3>Available Server List</h3>
              </header>
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Server Name</th>
                  <th>IP</th>
                  <th>username</th>
                  <th>Pass/Key</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
  		</div>
  	</div>


@endsection