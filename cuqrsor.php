<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/cursor.css">

</head>
<body>
<div class="cursor"></div>
     <script type="text/javascript">
        const cursor = document.querySelector(".cursor");

        document.addEventListener("mousemove", (e) => {
            let x=e.pageX;
            let y=e.pageY;

            cursor.style.top = y+ "px";
            cursor.style.left= x + "px";
            

        });

    
     </script>
  
</body>
</html>