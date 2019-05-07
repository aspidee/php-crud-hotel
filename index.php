<!DOCTYPE html>
 <html lang="" dir="ltr">
   <head>
     <meta charset="utf-8">
     <!-- viewport -->
     <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- FONTS: MONTSERRAT -->
     <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,700i" rel="stylesheet">
     <!-- FONTS: LATO -->
     <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
     <!-- CSS: FONTAWESOME -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
     <!-- CSS: MY_CSS -->
     <link rel="stylesheet" href="style.css">
     <!-- JS: JQUERY -->
     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <!-- JS: MOMENT -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
     <!-- JS: HANDLEBARS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
     <!-- JS: MY_TEMPLATE -->
     <script id="payments-template" type="text/x-handlebars-template">
       <div class="payments">
         <h2>{{status}} {{price}}</h2>
       </div>
     </script>
     <!-- JS: CHART -->
     <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
     <!-- JS: MY_SCRIPT -->
     <script type="text/javascript" src="script.js"></script>
     <!-- IMG: ICON -->
     <link rel="shortcut icon" href="">
     <title></title>
   </head>
   <body>
     <h1>PAYMENTS</h1>
     <div class="payments">
     </div>
   </body>
 </html>
