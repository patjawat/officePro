<html>

<head>
    <!-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> -->
    <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.css')}}">
</head>
<style>
.content-wrapper{
  background: linear-gradient(100deg, rgb(182, 40, 111) 50%, #ac2066 0);
}
</style>
<body class="layout-top-nav">
      <div id="app">
<div class="wrapper">
        <navbar-component></navbar-component>
<div class="content-wrapper" style="min-height: 428px;">

    <!-- Main content -->
    <div class="content">
    <div class="container">
    <br>
        <router-view></router-view>
        <br>
        <br>
    </div>

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright © 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>
