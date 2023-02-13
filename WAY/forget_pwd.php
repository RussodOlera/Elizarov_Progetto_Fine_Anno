<?php include_once "style.php"; ?>
<html>
    <head>
        <title>
            WAY?
        </title>
    </head>
    
    <body>
        <div class="full_page">
            
            <div class="navbar">
                <nav>
                    <ul id="MenuItems">
                        <div class='btn-theme'>
                            
                        </div>
                        
                    </ul>
                </nav>
            </div>
            <div class="header-box" id="head">
                <h1 style="color:black" class="title">WAY?</h1>
            </div>
            <div class="main_box" id="main_box">
                <section class="form signup">
                    <header>Who Are You?</header>
                    <form action="sendMail.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                        <div class="error-text"></div>
                        
                        <div class="field input">
                        <label>Inserici la tua mail</label>
                        <input type="text" name="uname" placeholder="Mail" required>
                        </div>
                        <div class="field button">
                        <input type="submit" name="submit" value="Manda richiesta">
                        </div>
                    </form>
                </section>
            </div> 
            <div id="toggle">
                <i class="indicator"></i>
            </div>
        </div>
        
        <script>
            const a=document.getElementById('head');
            const body = document.querySelector("body");
            const toggle = document.getElementById('toggle');
            const main_box = document.getElementById('main_box');
            toggle.onclick = function(){
                a.classList.toggle('active');
                toggle.classList.toggle('active');
                body.classList.toggle('active');
                main_box.classList.toggle('active');
            }
            </script>
        <script>
            var a=document.getElementById('btn');
            function moon()
            {
                a.style.left='50px';
                document.body.classList.toggle("dark-theme");
            }
            function sun()
            {
                a.style.left='0px';
                document.body.classList.toggle("light-theme");
            }
        </script>
        <script>
            var modal = document.getElementById('login-form');
            window.onclick = function(event) 
            {
                if (event.target == modal) 
                {
                    modal.style.display = "none";
                }
            }
        </script>
    </body>
</html>