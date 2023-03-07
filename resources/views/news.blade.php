@extends ('template-nav.nav')

@section('navbar')
    @parent
@endsection

@section('news')
    <h1>Selamat Datang di Halaman News</h1>
    <form action="" method="POST">
  <div class="mb-2 col-5">
    <label for="exampleInputEmail1" class="form-label">Halaman Pencarian</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="$param" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
