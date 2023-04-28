<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Blank Page - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="assets/css/Articles-Cards-images.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
</head>
<style>
    
#notification-container {
  position: fixed;
  top: 20px;
  right: 20px;
  z-index: 9999;
}

.alert {
  margin-bottom: 0;
  border-radius: 0;
}
    .qty{
        width: 30px;
        text-align: center;
        
    }
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      display: none;
      margin: 0;
    }
.link{
    text-decoration: none;
    font-weight: bold;
}
</style>

<body id="page-top" {{$attributes->merge(['class' => ''])}}>
  <div id="notification-container"></div>
    {{$slot}}
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/theme.js"></script>
</body>

</html>