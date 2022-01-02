<!-- Site favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('Dashboard/vendors/images/apple-touch-icon.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('Dashboard/vendors/images/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('Dashboard/vendors/images/favicon-16x16.png')}}">

<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="{{asset('Dashboard/vendors/styles/core.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('Dashboard/vendors/styles/icon-font.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('Dashboard/src/plugins/datatables/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('Dashboard/src/plugins/datatables/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('Dashboard/vendors/styles/style.css')}}">
<style>
    table {
          display: block;
          overflow: scroll;
          }
</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-119386393-1');
</script>

<!-- for table list design -->
<style>
#tblStocks {
font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
border-collapse: collapse;
width: 100%;
}

#tblStocks td, #tblStocks th {
border: 1px solid #ddd;
padding: 8px;
}

#tblStocks tr:nth-child(even){background-color: #f2f2f2;}

#tblStocks tr:hover {background-color: #ddd;}

#tblStocks th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #294c67;;
  color: white;
}
</style>
<!--end for table list design -->
