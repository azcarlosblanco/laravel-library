@if (Auth::user())
  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">@yield('header')</h1>
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
@endif
