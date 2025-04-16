<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>⌜Live Code Editor  ಠ_ಠ </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <!-- CodeMirror CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.12/codemirror.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.12/theme/material-darker.min.css">

    <link rel="stylesheet" href="./style.css">
    
    <script src="https://kit.fontawesome.com/ef9d577567.js" crossorigin="anonymous"></script>

    <link rel="website icon" type="png" href="./img/codedit.png">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>
    <!-- ______________________________________________ -->
    
    <div id="header" class="d-flex justify-content-between align-items-center p-2 bg-dark text-white">
       <a href="dashboard.php" class="btn btn-light"> <i class="fa-solid fa-circle-chevron-left"></i></a>
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
            <i class="fa-solid fa-shapes"></i>
        </button>

        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Zasoby</h5>
                <button type="button" class="btn-close"   data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="container">
                    <div class="color-input">
                        <input type="color" id="colorPicker" value="#8372a1">
                        <input type="text" id="colorCode" placeholder="#8372a1" value="#8372a1">
                        <div class="color-box" id="colorBox"></div>
                    </div>
                </div>

                <script>
                    const colorInput = document.getElementById('colorCode');
                    const colorPicker = document.getElementById('colorPicker');
                    const colorBox = document.getElementById('colorBox');

                    function updateColor(color) {
                        colorInput.value = color;
                        colorBox.style.backgroundColor = color;
                    }
                
                    colorInput.addEventListener('input', () => {
                        const color = colorInput.value;
                        if (/^#[0-9A-Fa-f]{6}$/.test(color)) {
                            colorPicker.value = color;
                            updateColor(color);
                        }
                    });
                
                    colorPicker.addEventListener('input', () => {
                        const color = colorPicker.value;
                        updateColor(color);
                    });
                </script>

                    <hr>
                    <!-- ____________________________________________________________   -->
                
            
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Kolory do skopiowania
                          </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col py-2">
                                            <div class="p-3 box-color copy-box" type="button" style="background-color: rgb(15, 23, 42);" data-copy="rgb(15, 23, 42)">
                                            </div>
                                        </div>
                                    <div class="col py-2">
                                        <div class="p-3 box-color copy-box" type="button" style="background-color: #00d1ce;" data-copy="#00d1ce">
                                        </div>
                                    </div>
                                    <div class="col py-2">
                                        <div class="p-3 box-color copy-box" type="button" style="background-color: #2869d2; " data-copy="#2869d2">
                                        </div>
                                    </div>        
                                    <div class="col py-2">
                                        <div class="p-3 box-color copy-box" type="button" style="background-color: #34df6d;" data-copy="#34df6d">
                                        </div>
                                    </div>
                                    <div class="col py-2">
                                        <div class="p-3 box-color copy-box" type="button" style="background-color: #9900d1;" data-copy="#9900d1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- _____accordion-2_____ -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Gradienty do skopiowania
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="container py-2 text-center align-items-center">
                        <div class="row gx-5">
                            <div class="col">
                               <div class="p-3 copy-box" type="button" style="width: 60px; height: 60px; border-radius: 14px; background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);" data-copy="background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);"> 
                                    <!-- 1        -->
                                </div>
                            </div>
                        <div class="col">
                            <div class="p-3 copy-box" type="button" style="width: 60px; height: 60px; border-radius: 14px; background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);" data-copy="background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">
                               <!-- 2               -->
                            </div>
                        </div>
                        <div class="col">
                           <div class="p-3 copy-box" type="button" style="width: 60px; height: 60px; border-radius: 14px; background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%);" data-copy="background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%);">
                              <!-- 3 -->
                            </div>  
                        </div>
                        <div class="col py-4">
                            <div class="p-3 copy-box" type="button" style="width: 60px; height: 60px; border-radius: 14px; background-image: linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%);" data-copy="background-image: linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%);">               
                              <!-- 4 -->
                            </div>
                        </div>
                        <div class="col py-4">
                           <div class="p-3 copy-box" type="button" style="width: 60px; height: 60px; border-radius: 14px; background-image: linear-gradient(to top, #accbee 0%, #e7f0fd 100%);" data-copy="background-image: linear-gradient(to top, #accbee 0%, #e7f0fd 100%);">                 
                                  <!-- 5 -->            
                            </div>
                        </div>
                        <div class="col py-4">
                            <div class="p-3 copy-box" type="button" style="width: 60px; height: 60px; border-radius: 14px; background: #C9CCD3;
                                  background-image: linear-gradient(-180deg, rgba(255,255,255,0.50) 0%, rgba(0,0,0,0.50) 100%);
                                  background-blend-mode: lighten;" data-copy="background: #C9CCD3;
                                  background-image: linear-gradient(-180deg, rgba(255,255,255,0.50) 0%, rgba(0,0,0,0.50) 100%);
                                  background-blend-mode: lighten;">                         
                                  <!-- 6 -->
                            </div>
                        </div>
                        <div class="col">
                            <div class="p-3 copy-box" type="button" style="width: 60px; height: 60px; border-radius: 14px; background-image: linear-gradient(to top,rgb(90, 150, 106) 0%,rgb(194, 251, 211) 100%);" data-copy="background-image: linear-gradient(to top, #a18cd1 0%,rgb(194, 251, 205) 100%);">
                              <!-- 7 -->
                            </div>
                        </div>     
                        <div class="col">
                            <div class="p-3 copy-box" type="button" style="width: 60px; height: 60px; border-radius: 14px; background-image: linear-gradient(to right, #ff9a9e 0%, #fecfef 99%, #fecfef 100%);" data-copy="background-image: linear-gradient(to right, #ff9a9e 0%, #fecfef 99%, #fecfef 100%);">
                              <!-- 8 -->
                            </div>
                        </div>
                        <div class="col">
                            <div class="p-3 copy-box" type="button" style="width: 60px; height: 60px; border-radius: 14px; background-image: linear-gradient(to bottom, #a1c4fd 0%, #c2e9fb 100%);" data-copy="background-image: linear-gradient(to bottom, #a1c4fd 0%, #c2e9fb 100%);">
                              <!-- 9 -->
                            </div>
                        </div> 
                        <div class="col py-4">
                            <div class="p-3 copy-box" type="button" style="width: 60px; height: 60px; border-radius: 14px; background: radial-gradient(#0288d1, #01579b);" data-copy="radial-gradient(#0288d1, #01579b)">               
                              <!-- 10 -->
                            </div>
                        </div>
                        <div class="col py-4">
                            <div class="p-3 copy-box" type="button" style="width: 60px; height: 60px; border-radius: 14px; background: linear-gradient(to right, #5C258D, #4389A2);" data-copy="linear-gradient(to right, #5C258D, #4389A2);">                 
                               <!-- 11 -->
                            </div>
                        </div>
                        <div class="col py-4">
                            <div class="p-3 copy-box" type="button" style="width: 60px; height: 60px; border-radius: 14px; background-image: linear-gradient(to top, #accbee 0%, #e7f0fd 100%);" data-copy="linear-gradient(to top, #accbee 0%, #e7f0fd 100%);">                         
                                <!-- 12 -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
          <!-- _____accordion-3____ -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Tła do skopiowania
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">

                    <!-- ____bg_____ -->
                    <div class="container ">
                        <div class="row px-0">
                            <div class="col py-2">
                                <div class=" copy-box" type="button" style="width: 300px; height: 140px; border-radius: 14px; background-image: linear-gradient(135deg, rgba(19, 176, 223, 0.26) 0%, rgba(19, 176, 223, 0.26) 23%,rgba(16, 160, 197, 0.26) 23%, rgba(16, 160, 197, 0.26) 65%,rgba(13, 144, 172, 0.26) 65%, rgba(13, 144, 172, 0.26) 70%,rgba(9, 129, 146, 0.26) 70%, rgba(9, 129, 146, 0.26) 74%,rgba(6, 113, 121, 0.26) 74%, rgba(6, 113, 121, 0.26) 90%,rgba(3, 97, 95, 0.26) 90%, rgba(3, 97, 95, 0.26) 100%),linear-gradient(45deg, rgba(65, 234, 230, 0.26) 0%, rgba(65, 234, 230, 0.26) 28%,rgba(88, 192, 215, 0.26) 28%, rgba(88, 192, 215, 0.26) 55%,rgba(110, 150, 201, 0.26) 55%, rgba(110, 150, 201, 0.26) 66%,rgba(133, 107, 186, 0.26) 66%, rgba(133, 107, 186, 0.26) 80%,rgba(155, 65, 172, 0.26) 80%, rgba(155, 65, 172, 0.26) 85%,rgba(178, 23, 157, 0.26) 85%, rgba(178, 23, 157, 0.26) 100%),linear-gradient(90deg, rgb(27, 194, 246) 0%, rgb(27, 194, 246) 6%,rgb(39, 174, 237) 6%, rgb(39, 174, 237) 32%,rgb(50, 155, 229) 32%, rgb(50, 155, 229) 40%,rgb(62, 135, 220) 40%, rgb(62, 135, 220) 66%,rgb(74, 116, 211) 66%, rgb(74, 116, 211) 72%,rgb(86, 96, 202) 72%, rgb(86, 96, 202) 86%,rgb(97, 77, 194) 86%, rgb(97, 77, 194) 96%,rgb(109, 57, 185) 96%, rgb(109, 57, 185) 100%);" data-copy="rgb(15, 23, 42)">
                                </div>
                            </div>
                            <div class="col py-2">
                                <div class=" copy-box" type="button" style="width: 300px; height: 140px; border-radius: 14px; background-image: radial-gradient(circle at 53% 25%, rgba(203, 203, 203,0.04) 0%, rgba(203, 203, 203,0.04) 36%,transparent 36%, transparent 100%),radial-gradient(circle at 48% 27%, rgba(22, 22, 22,0.04) 0%, rgba(22, 22, 22,0.04) 45%,transparent 45%, transparent 100%),radial-gradient(circle at 65% 50%, rgba(219, 219, 219,0.04) 0%, rgba(219, 219, 219,0.04) 61%,transparent 61%, transparent 100%),radial-gradient(circle at 78% 82%, rgba(229, 229, 229,0.04) 0%, rgba(229, 229, 229,0.04) 26%,transparent 26%, transparent 100%),radial-gradient(circle at 99% 75%, rgba(96, 96, 96,0.04) 0%, rgba(96, 96, 96,0.04) 31%,transparent 31%, transparent 100%),radial-gradient(circle at 17% 28%, rgba(188, 188, 188,0.04) 0%, rgba(188, 188, 188,0.04) 15%,transparent 15%, transparent 100%),radial-gradient(circle at 19% 19%, rgba(25, 25, 25,0.04) 0%, rgba(25, 25, 25,0.04) 68%,transparent 68%, transparent 100%),radial-gradient(circle at 35% 23%, rgba(31, 31, 31,0.04) 0%, rgba(31, 31, 31,0.04) 18%,transparent 18%, transparent 100%),linear-gradient(90deg, rgb(138, 193, 238),rgb(20, 21, 171));">
                                </div>
                            </div>
                            <div class="col py-2">
                                <div class=" copy-box" type="button" style="width: 300px; height: 140px; border-radius: 14px; background-image: radial-gradient(circle at 19% 90%, rgba(190, 190, 190,0.04) 0%, rgba(190, 190, 190,0.04) 17%,transparent 17%, transparent 100%),radial-gradient(circle at 73% 2%, rgba(78, 78, 78,0.04) 0%, rgba(78, 78, 78,0.04) 94%,transparent 94%, transparent 100%),radial-gradient(circle at 45% 2%, rgba(18, 18, 18,0.04) 0%, rgba(18, 18, 18,0.04) 55%,transparent 55%, transparent 100%),radial-gradient(circle at 76% 60%, rgba(110, 110, 110,0.04) 0%, rgba(110, 110, 110,0.04) 34%,transparent 34%, transparent 100%),radial-gradient(circle at 68% 56%, rgba(246, 246, 246,0.04) 0%, rgba(246, 246, 246,0.04) 16%,transparent 16%, transparent 100%),radial-gradient(circle at 71% 42%, rgba(156, 156, 156,0.04) 0%, rgba(156, 156, 156,0.04) 47%,transparent 47%, transparent 100%),radial-gradient(circle at 46% 82%, rgba(247, 247, 247,0.04) 0%, rgba(247, 247, 247,0.04) 39%,transparent 39%, transparent 100%),radial-gradient(circle at 50% 47%, rgba(209, 209, 209,0.04) 0%, rgba(209, 209, 209,0.04) 45%,transparent 45%, transparent 100%),linear-gradient(90deg, rgb(84, 36, 210),rgb(44, 27, 154));">
                                </div>
                            </div>
                            <div class="bg">
                                <div class="col py-2">
                                    <div class=" copy-box" type="button" style="width: 300px; height: 140px; border-radius: 14px; background-image: radial-gradient(circle at 13% 47%, rgba(140, 140, 140,0.03) 0%, rgba(140, 140, 140,0.03) 25%,transparent 25%, transparent 100%),radial-gradient(circle at 28% 63%, rgba(143, 143, 143,0.03) 0%, rgba(143, 143, 143,0.03) 16%,transparent 16%, transparent 100%),radial-gradient(circle at 81% 56%, rgba(65, 65, 65,0.03) 0%, rgba(65, 65, 65,0.03) 12%,transparent 12%, transparent 100%),radial-gradient(circle at 26% 48%, rgba(60, 60, 60,0.03) 0%, rgba(60, 60, 60,0.03) 6%,transparent 6%, transparent 100%),radial-gradient(circle at 97% 17%, rgba(150, 150, 150,0.03) 0%, rgba(150, 150, 150,0.03) 56%,transparent 56%, transparent 100%),radial-gradient(circle at 50% 100%, rgba(25, 25, 25,0.03) 0%, rgba(25, 25, 25,0.03) 36%,transparent 36%, transparent 100%),radial-gradient(circle at 55% 52%, rgba(69, 69, 69,0.03) 0%, rgba(69, 69, 69,0.03) 6%,transparent 6%, transparent 100%),linear-gradient(90deg, rgb(255,255,255),rgb(255,255,255));">
                                    </div>
                                </div>
                            </div>
                            <div class="bg">
                                <div class="col py-2">
                                    <div class=" copy-box" type="button" style="width: 300px; height: 140px; border-radius: 14px; background-image: radial-gradient(circle at 57% 36%, rgba(199,199,199, 0.11) 0%, rgba(199,199,199, 0.11) 10%,transparent 10%, transparent 100%),radial-gradient(circle at 22% 61%, rgba(199,199,199, 0.11) 0%, rgba(199,199,199, 0.11) 36%,transparent 36%, transparent 100%),radial-gradient(circle at 68% 97%, rgba(199,199,199, 0.11) 0%, rgba(199,199,199, 0.11) 41%,transparent 41%, transparent 100%),radial-gradient(circle at 57% 89%, rgba(199,199,199, 0.11) 0%, rgba(199,199,199, 0.11) 30%,transparent 30%, transparent 100%),radial-gradient(circle at 39% 80%, rgba(199,199,199, 0.11) 0%, rgba(199,199,199, 0.11) 22%,transparent 22%, transparent 100%),radial-gradient(circle at 88% 71%, rgba(199,199,199, 0.11) 0%, rgba(199,199,199, 0.11) 30%,transparent 30%, transparent 100%),linear-gradient(0deg, rgb(255,255,255),rgb(255,255,255)); background-color: #333;" data-copy="rgb(15, 23, 42)">
                                    </div>
                                </div>
                            </div>
                            <div class="col py-2">
                                <div class=" copy-box" type="button" style="width: 300px; height: 140px; border-radius: 14px; background-image: radial-gradient(circle at 48% 33%, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.04) 8%,transparent 8%, transparent 92%),radial-gradient(circle at 28% 16%, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.04) 8%,transparent 8%, transparent 92%),radial-gradient(circle at 34% 52%, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.03) 6%,transparent 6%, transparent 94%),radial-gradient(circle at 92% 52%, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.03) 6%,transparent 6%, transparent 94%),radial-gradient(circle at 77% 84%, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.03) 6%,transparent 6%, transparent 94%),radial-gradient(circle at 75% 64%, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.03) 6%,transparent 6%, transparent 94%),radial-gradient(circle at 70% 62%, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.04) 4%,transparent 4%, transparent 96%),radial-gradient(circle at 55% 100%, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.04) 4%,transparent 4%, transparent 96%),radial-gradient(circle at 12% 11%, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.04) 4%,transparent 4%, transparent 96%),radial-gradient(circle at 35% 55%, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.04) 4%,transparent 4%, transparent 96%),linear-gradient(45deg, rgb(26, 21, 192),rgb(171, 83, 239));" data-copy="">
                                </div>
                            </div>
                            <div class="col py-2">
                                <div class=" copy-box" type="button" style="width: 300px; height: 140px; border-radius: 14px; background-image: repeating-linear-gradient(0deg, rgb(177,208,243) 0px, rgb(177,208,243) 2px, transparent 2px, transparent 30px), repeating-linear-gradient(90deg, rgb(177,208,243) 0px, rgb(177,208,243) 2px, transparent 2px, transparent 30px), linear-gradient(white, white);" data-copy="">
                                </div>
                            </div>

                            <div class="col py-2">
                                <div class=" copy-box" type="button" style="width: 300px; height: 140px; border-radius: 14px; background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0)); -webkit-backdrop-filter: blur (20px); backdrop-filter: blur (20px); box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37); border: 1px solid rgba(255, 255, 255, 0.18);" data-copy="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <!-- _____________Linki do skopiowania________________________ -->

        <div class="copy-box" type="button" style="" data-copy='<script src="https://kit.fontawesome.com/ef9d577567.js" crossorigin="anonymous"></script>'>
            <h5>Link z Font Awesome</h5>
        </div>
        <div class="copy-box" type="button" style="" data-copy='<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">'>
            <h5>Link z Bootstrap</h5>
        </div>
        <div class="copy-box" type="button" style="" data-copy='<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>'>
            <h5>Script z Bootstrap</h5>
        </div>

        <hr>

        <!-- _____________________Ikony____________________________________ -->
        <p class="d-inline-flex gap-1 py-4">
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Ikony do skopiowania
            </button>
        </p>

        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <div class="row">
                    <div class="col">      
                  	    <div class="p-3 copy-box" type="button" data-copy='<i class="fa-solid fa-house"></i>'>                         
                            <i class="fa-solid fa-house"></i>
                        </div>
                    </div>
                    <div class="col">  
                  	    <div class="p-3 copy-box" type="button" data-copy='<i class="fa-solid fa-user"></i>'>
                            <i class="fa-solid fa-user"></i>
                        </div>
                    </div>
                    <div class="col">
                  	    <div class="p-3 copy-box" type="button" data-copy='<i class="fa-solid fa-bars"></i>'>
                            <i class="fa-solid fa-bars"></i>
                        </div>
                    </div>
                    <div class="col">
                  	    <div class="p-3 copy-box" type="button" data-copy='<i class="fa-solid fa-envelope"></i>'>
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                    </div>
                    <div class="col">
                  	    <div class="p-3 copy-box" type="button" data-copy='<i class="fa-solid fa-magnifying-glass"></i>'>
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                    </div>
                    <div class="col">
                  	    <div class="p-3 copy-box" type="button" data-copy='<i class="fa-solid fa-check"></i>'>
                            <i class="fa-solid fa-check"></i>
                        </div>
                    </div>
                    <div class="col">
                  	    <div class="p-3 copy-box" type="button" data-copy='<i class="fa-regular fa-circle-xmark"></i>'>
                            <i class="fa-regular fa-circle-xmark"></i>
                        </div>
                    </div>
                    <div class="col">
                  	    <div class="p-3 copy-box" type="button" data-copy='<i class="fa-solid fa-comment"></i>'>
                            <i class="fa-solid fa-comment"></i>
                        </div>
                    </div>
                    <div class="col">
                  	    <div class="p-3 copy-box" type="button" data-copy='<i class="fa-solid fa-trash"></i>'>
                            <i class="fa-solid fa-trash"></i>
                        </div>
                    </div>
                    <div class="col">
                  	    <div class="p-3 copy-box" type="button" data-copy='<i class="fa-solid fa-gear"></i>'>
                            <i class="fa-solid fa-gear"></i>
                        </div>
                    </div>
                    <div class="col">
                  	    <div class="p-3 copy-box" type="button" data-copy='<i class="fa-solid fa-plus"></i>'>
                            <i class="fa-solid fa-plus"></i>
                        </div>
                    </div>
                </div>      
            </div>
        </div>
    </div>
        <!-- ____________________________________________________________   -->

  </div>
</div>
 
    <div class="d-flex justify-content-between  align-items-center p-2">

        <select id="device-select" class="form-select w-auto">
            <option value="375x667">  📱  (375x667)</option>
            <option value="768x1024">📰 (768x1024)</option>
            <option value="1024x768"> 💻  (1024x768)</option>
            <option value="1280x800"> 🖥  (1280x800)</option>
        </select>
    </div>        
        
        <button id="load-projects" class="btn btn-secondary">Wczytaj projekt <i class="fa-solid fa-folder-open"></i></button>

        <button id="save-project" class="btn btn-primary">Zapisz <i class="fa-regular fa-floppy-disk"></i></button>
    </div>

    <div id="editor-container">
         <div id="html-editor" class="editor"></div>
        <div class="resizer" id="resizer-1"></div>
         <div id="css-editor" class="editor"></div>
        <div class="resizer" id="resizer-2"></div>
         <div id="js-editor" class="editor "></div>
    </div>


    <div id="preview-container" class="d-flex justify-content-center align-items-center py-2">
        <iframe id="preview" class="shadow"></iframe>
    </div>

<div id="project-modal" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Projekty</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul id="project-list" class="list-group">
                    <!-- Lista projektów będzie generowana dynamicznie -->
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zamknij</button>
            </div>
        </div>
    </div>
</div>


    <!-- CodeMirror JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.12/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.12/mode/xml/xml.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.12/mode/css/css.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.12/mode/javascript/javascript.min.js"></script>
    <script>
        const htmlEditor = CodeMirror(document.getElementById('html-editor'), {
            mode: 'xml',
            theme: 'material-darker',
            lineNumbers: true,
            tabSize: 2
        });

        const cssEditor = CodeMirror(document.getElementById('css-editor'), {
            mode: 'css',
            theme: 'material-darker',
            lineNumbers: true,
            tabSize: 2
        });

        const jsEditor = CodeMirror(document.getElementById('js-editor'), {
            mode: 'javascript',
            theme: 'material-darker',
            lineNumbers: true,
            tabSize: 2
        });

        const preview = document.getElementById('preview');

        
        const MIN_WIDTH = 100; // Minimalna szerokość każdego edytora w pikselach
 

        function updatePreview() {
            const html = htmlEditor.getValue();
            const css = `<style>${cssEditor.getValue()}</style>`;
            const js = `<script>${jsEditor.getValue()}<\/script>`;
            const content = html + css + js;

            const doc = preview.contentDocument || preview.contentWindow.document;
            doc.open();
            doc.write(content);
            doc.close();
        }

        [htmlEditor, cssEditor, jsEditor].forEach(editor => {
            editor.on('change', updatePreview);
        });

        document.getElementById('device-select').addEventListener('change', (e) => {
            const [width, height] = e.target.value.split('x');
            preview.style.width = `${width}px`;
            preview.style.height = `${height}px`;
        });

        document.getElementById('save-project').addEventListener('click', () => {
            const projectName = prompt("Podaj nazwę projektu:");
            if (!projectName) return;

            fetch('save_project.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({
                    name: projectName,
                    html: htmlEditor.getValue(),
                    css: cssEditor.getValue(),
                    js: jsEditor.getValue()
                })
            }).then(response => response.text())
              .then(alert);
        });

        updatePreview();
        
// Ładowanie listy projektów
function loadProjectList() {
    fetch('load_projects.php')
        .then(response => response.json())
        .then(projects => {
            const projectList = document.getElementById('project-list');
            projectList.innerHTML = ''; // Wyczyszczenie poprzedniej listy

            projects.forEach(project => {
                const listItem = document.createElement('li');
                listItem.textContent = project;
                listItem.className = 'list-group-item list-group-item-action';
                listItem.style.cursor = 'pointer';

                // Obsługa kliknięcia na projekt
                listItem.addEventListener('click', () => loadProject(project));
                projectList.appendChild(listItem);
            });
        });
}

// Wczytanie projektu
function loadProject(projectName) {
    fetch(`load_project.php?name=${projectName}`)
        .then(response => response.json())
        .then(data => {
            htmlEditor.setValue(data.html);
            cssEditor.setValue(data.css);
            jsEditor.setValue(data.js);
            updatePreview();
            alert(`Projekt "${projectName}" został wczytany.`);
        });
}

// Przyciski do otwierania modala z projektami
document.getElementById('load-projects').addEventListener('click', () => {
    loadProjectList();
    const modal = new bootstrap.Modal(document.getElementById('project-modal'));
    modal.show();
});
        
        

        
let isResizing = false;
let currentResizer;
let startX, startWidthLeft, startWidthRight;

document.querySelectorAll('.resizer').forEach(resizer => {
    resizer.addEventListener('mousedown', (e) => {
        isResizing = true;
        currentResizer = resizer;

        const leftEditor = resizer.previousElementSibling;
        const rightEditor = resizer.nextElementSibling;

        startX = e.clientX;
        startWidthLeft = leftEditor.offsetWidth;
        startWidthRight = rightEditor.offsetWidth;

        document.body.style.cursor = 'ew-resize';
        e.preventDefault();
    });
});

document.addEventListener('mousemove', (e) => {
    if (!isResizing) return;

    const dx = e.clientX - startX;
    const leftEditor = currentResizer.previousElementSibling;
    const rightEditor = currentResizer.nextElementSibling;

    const newWidthLeft = startWidthLeft + dx;
    const newWidthRight = startWidthRight - dx;

    if (newWidthLeft > 100 && newWidthRight > 100) { // Zapobiegamy zbyt małym szerokościom
        leftEditor.style.width = `${newWidthLeft}px`;
        rightEditor.style.width = `${newWidthRight}px`;
    }
});

document.addEventListener('mouseup', () => {
    isResizing = false;
    document.body.style.cursor = 'default';
});

        
        
    </script>



<script>
  // Funkcja kopiowania tekstu z dowolnego elementu z klasą 'copy-box'
  document.querySelectorAll('.copy-box').forEach(element => {
    element.addEventListener('click', () => {
      const textToCopy = element.getAttribute('data-copy');
      navigator.clipboard.writeText(textToCopy).then(() => {
        alert(`Tekst skopiowany: ${textToCopy}`);
      }).catch(err => {
        console.error('Błąd podczas kopiowania: ', err);
      });
    });
  });
</script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>