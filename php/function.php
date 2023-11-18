<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/function.css">
    <title>Document</title>
</head>
    <?php include "navbar.php"; ?>
   
    
<body class="text-white bg-black ">

    <div class="flex items-center justify-center h-screen container1 " id="contain01">
        <div class="flex flex-col items-center w-1/5 h-full gap-4 p-5 border-2 border-blue-600 border-dashed left">
            <div class="flex items-start content-center h-1/6 new-audio ">
                <h3 class="px-4 py-2 border-2 rounded-xl">New Audio</h3>
            </div>
            <div class="flex flex-col items-start content-center w-full">
                <div class="w-full">Previous</div>
                <div class="flex items-center content-center">
                    <div class="icon" style="background-image: url('assest/headphone.png');"></div>
                    <div class="">audio name</div>
                </div>
            </div>
        </div>
        
        <div class="flex flex-col items-center w-4/5 h-full justify-evenly right">
            <div id="input-box" class="flex items-center justify-center w-4/5 border-2 border-blue-600 border-dashed top h-1/2 rounded-xl">
                <div id="box" class="flex flex-col items-center justify-center">
                    <div class="text-2xl font-semibold">Drag Audio here</div>
                    <div class="">or</div>
                    <div class="m-4">
                        <input type="file" class="hidden" id="input-button">
                        <label for="input-button" class="px-4 py-2 font-sans text-white bg-indigo-500 rounded-md cursor-pointer">Browse</label>
                    </div>
                </div>
            </div>
            <div class="w-4/5 border-2 border-blue-600 border-dashed bottom h-1/2">
                <div id="text">text</div>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>
    <script src="backend/function.js"></script>
</body>
</html>