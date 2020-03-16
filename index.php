<?php include('index_header.php'); ?>
			<?php include('dbcon.php'); ?>
    <body style="background-image: url('images/desktop.jpg');">
		<center><img class="logo" src="images/logoSSN.png" height="156" width="156" alt="not found"/></center>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <div class="clr"><div class="title">
				Student Social Network</div></div>
            </div><!--/ Codrops top bar -->
            <section>				
			

                <div id="container_demo" >
				
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
								<?php include('login_form.php'); ?>
                        </div>
                        <div id="register" class="animate form">
								<?php include('sign_up_form.php'); ?>
                        </div>
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>