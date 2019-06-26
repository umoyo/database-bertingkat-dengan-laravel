<html>
<head>
    <title>kategori</title>
    <script type="text/javascript" charset="utf-8">
      $(document).ready(function() {
	$('.table-paginate').dataTable();
 } );
</script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" language="javascript" src="https:////cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body >
<h1>Tambah Kategori</h1>

<form method="post" action="{{ url('admin/kategori') }}">
          <div class="form-group">
              @csrf
              <label for="name">Nama :</label>
              <input type="text" class="form-control" name="nama"/>
          </div>
          <div class="form-group">
              <label for="quantity">Deskripsi:</label>
              <input type="text" class="form-control" name="deskripsi"/>
          </div>
          <button type="submit" class="btn btn-primary">tambah</button>
      </form>
</html>