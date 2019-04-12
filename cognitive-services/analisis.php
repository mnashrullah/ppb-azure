<!DOCTYPE html>
<html>

<head>
    <title>Cognitive Services</title>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="scripts/analisis.js"></script>
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script> -->
    
</head>

<div class="container-fluid">
  <h1 class="text-primary text-center">Analyze image</h1>
  

  <div id="imageDiv" style="width:420px">
        <img id="sourceImage" width="400" />
    </div>
    <div id="jsonOutput">
        Result:
        <br>
        <textarea id="responseTextArea" style="width:580px; height:200px;"></textarea>
    </div>
</div>
</html>