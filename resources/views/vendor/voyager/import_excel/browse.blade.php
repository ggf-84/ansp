@extends('voyager::master')

@section('content')
   <h3 align="center">Import Excel File</h3>
    <br />
   @if(count($errors) > 0)
    <div class="alert alert-danger">
     Upload Validation Error<br><br>
     <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif

   @if($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
   <form method="post" enctype="multipart/form-data" action="{{ url('/import_excel/import') }}">
    {{ csrf_field() }}
    <div class="form-group">
     <table class="table">
     <tr>
       <td width="40%" align="right"><label>Select Language</label></td>
        <td width="30">
         <select name="lang" class="form-control" required>
            <option value="ro">Romanian</option>
            <option value="ru">Russian</option>
         </select>
       </td>
      </tr>
      <tr>
       <td width="40%" align="right"><label>Select File Category</label></td>
        <td width="30">
         <select name="category" class="form-control" required>
            @foreach($categories as $cat)
               <option value="{{ $cat->id }}">{{ $cat->title_ro }}</option>
            @endforeach
         </select>
       </td>
      </tr> 
      <tr>  
       <td width="40%" align="right"><label>Select File for Upload</label></td>
       <td width="30">
        <input type="file" name="select_file" />
       </td>
       <td width="30%" align="left">
        <input type="submit" name="upload" class="btn btn-primary" value="Upload">
       </td>
      </tr>
      <tr>
       <td width="40%" align="right"></td>
       <td width="30"><span class="text-muted">.xls, .xslx</span></td>
       <td width="30%" align="left"></td>
      </tr>
     </table>
    </div>
   </form>
   
   <br />
   <div class="panel panel-default">
    <div class="panel-heading">
     <h3 class="panel-title">Customer Data</h3>
    </div>
    <div class="panel-body">
     <div class="table-responsive">
      <table class="table table-bordered table-striped">
       <tr>
        <th>Indicator</th>
        <th>Indicator Name</th>
        <th>Population Group</th>
        
        <?php 
         for($y=2015; $y<2019; ++$y ) {
            echo '<th>' . $y . '</th>';
         }
        ?>

       </tr>
       @foreach($data as $row)
       <tr>
         <td>{{ $row->indicator }}</td>
         <td>{{ $row->indicator_name }}</td>
         <td>{{ $row->population_group }}</td>

         <?php 
         for($y=2015; $y<2019; ++$y ) {
            echo '<td>'. $row->{$y} .'</td>';
         }
        ?>

       </tr>
       @endforeach
      </table>
     </div>
    </div>
   </div>
@stop