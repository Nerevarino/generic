<?php

$test_page_template = <<<TESTTEMPLATE
<!DOCTYPE html>
<html >
  <head >
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
      html, body {
          width:100%;
          height:100%;
          margin:0;
          padding:0;
          box-sizing:border-box;
          background-color:white;
      }

      body {
          display:flex;
          flex-flow:row nowrap;
      }

      .container {
          margin:auto;
      }      
      {css}
    </style>    
    <title >Тест компонента</title>
  </head>
  <body >
    <div class="container">
      {html}
    </div>
  </body>
  <script type="text/javascript">
    {js}
  </script>
</html>
TESTTEMPLATE;
