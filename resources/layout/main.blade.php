@INCLUDE('layout.head')
 
 
 
 
 
<!-- Page Wrapper -->
<div id="wrapper">
 
  @INCLUDE('layout.sidebar')
 
  <!-- Content Wrapper -->
  <div id="content-wrapper" CLASS="d-flex flex-column">
 
    <!-- Main Content -->
    <div id="content">
 
        @INCLUDE('layout.navbar')
 
      <!-- Begin Page Content -->
      <div CLASS="container-fluid">
 
          @yield('content')
 
      </div>
      <!-- /.container-fluid -->
 
    </div>
    <!-- End of Main Content -->
 
    @INCLUDE('layout.footer')
 
  </div>
  <!-- End of Content Wrapper -->
 
</div>
<!-- End of Page Wrapper -->
 
  @INCLUDE('layout.js')