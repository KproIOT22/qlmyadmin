<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    @include('admin.elements.head')
  </head>

  <body>
    


          <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->


              @yield('content')
                 
            </div>


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    @include('admin.elements.script')
  </body>
</html>
