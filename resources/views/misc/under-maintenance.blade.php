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
  class="light-style"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    @include('partials.maintenance_and_error')
  </head>

  <body>
    <!-- Content -->

    <!--Under Maintenance -->
    <div class="container-xxl container-p-y">
      <div class="misc-wrapper">
        <h2 class="mb-2 mx-2">Under Maintenance!</h2>
        <p class="mb-4 mx-2">Sorry for the inconvenience but we're performing some maintenance at the moment</p>
        <a href="{{ url('/home') }}" class="btn btn-primary">Back to home</a>
        <div class="mt-4">
          <img
            src="{{asset('assets/img/illustrations/girl-doing-yoga-light.png')}}"
            alt="girl-doing-yoga-light"
            width="500"
            class="img-fluid"
            data-app-dark-img="illustrations/girl-doing-yoga-dark.png"
            data-app-light-img="illustrations/girl-doing-yoga-light.png"
          />
        </div>
      </div>
    </div>
    <!-- /Under Maintenance -->

    <!-- / Content -->    
   <!-- Core JS -->
   @include('partials.script')
  </body>
</html>
