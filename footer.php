
	<head>
		<style>

			*
			{
				margin: 0;
				padding: 0;
				font-family: Poppins;

			}
            /*
			body
			{
				display: flex;
				justify-content: flex-end;
				align-items: flex-end;
				min-height: 150vh;
				background: #0a1040;
			}
            */
			footer 
			{
				position: relative;
				display: flex;
				width: 92.5%;
				background: #3586ff;
				min-height: 80px;
				padding: 20px 50px;
				display: flex;
				justify-content: center;
				align-items: center;
				flex-direction: row;
			}





			footer .foot_left
			{
				position: relative;
				display: flex;
				justify-content: center;
				right: 160px;
			}



			footer .foot_left .paragraph1
			{
				position: relative;
				top: 0;
				left: 0;
				height: 200px;
				width: 30%;
			}

			footer .foot_left .paragraph1 p
			{
				color: #edd8bb;
				text-align: center;
				font-size: 14px;
				text-emphasis: 0.5em;
			}

			footer .foot_left .foot_mid
			{
			  	
			  	position: relative;
			  	left: 130px;
				width: 300px;
				height: 200px;
				background-color: #3586ff;
				display: flex;
				bottom: 15px;	
				left: 230px;
			}




			footer .foot_left .foot_mid .social_icon
			{
				position: relative;
				display: flex;
				justify-content: center;
				align-items: center;
				margin: 10px 20px 0;
			}

			footer .foot_left .foot_mid .social_icon li

			{
				list-style: none;
			}

			footer .foot_left .foot_mid .social_icon li a
			{
				font-size: 2em;
				color: lightgray;
				margin: 0 10px;
				display: inline-block;
				transition: 0.3s;
			}

			footer .foot_left .foot_mid .social_icon li a:hover
			{
				transform: translateY(-10px);
			}



			footer .foot_mid p {
				position: absolute;
				bottom: 0;
				color: lightgray;
			}

			footer .foot_right
			{
				position: relative;
				display: flex;
			}

			footer .foot_right .community
			{
				margin-right: 100px;
			}

			footer .foot_right .legal
			{
				margin-right: 50px;
				width: 100px;
			}

			footer .foot_right .community li,
			footer .foot_right .legal li,
			footer .foot_right .community li a,
			footer .foot_right .legal li a
			{
				list-style: none;
				text-decoration: none;
				color: darkgray;
				font-weight: 300;
				font-size: 13px;
			}


			footer .foot_right .community p,
			footer .foot_right .legal p
			{
				font-size: 1.3em;
				font-weight: 500;
				color: lightgray;
			}





			footer .wave
			{
				position: absolute;
				top: -100px;
				left: 0;
				width: 100%;
				height: 100px;
				background: url(wave.png);
				background-size: 1000px 100px;
			}

			footer .wave#wave1
			{
				z-index: 1000;
				opacity: 1;
				bottom: 0;
				animation: animateWave 4s linear infinite;
			}
			footer .wave#wave2
			{
				z-index: 999;
				opacity: 0.5;
				bottom: 10px;
				animation: animateWave_02 4s linear infinite;
			}
			footer .wave#wave3
			{
				z-index: 1000;
				opacity: 0.2;
				bottom: 15px;
				animation: animateWave 3s linear infinite;
			}
			footer .wave#wave4
			{
				z-index: 999;
				opacity: 0.7;
				bottom: 20px;
				animation: animateWave_02 3s linear infinite;
			}

			@keyframes animateWave 
			{
				0%
				{
					background-position-x: 1000px;
				}
				100%
				{
					background-position-x: 0px;
				}
			}

			@keyframes animateWave_02 
			{
				0%
				{
					background-position-x: 0px;
				}
				100%
				{
					background-position-x: 1000px;
				}
			}
		</style>
	</head>

	<body>
		<footer>

			<div>
				<div class="wave" id="wave1"></div>
				<div class="wave" id="wave2"></div>
				<div class="wave" id="wave3"></div>
				<div class="wave" id="wave4"></div>
			</div>
			
			
			<div class="foot_left">
				<div class="paragraph1">
				<b><h2>bro<span style="color:#FFAA33;">Code</span></h2></b>
					<p>
							<br><br>
						A E-commerce Website presented to the faculty of Polytechnic University of the Philippines Quezon CityBranch. In partial fulfillment for the subject IT Electives | WEB DEVELOPMENT | DBA
					</p>

				</div>	
				<div class="foot_mid">
					<ul class="social_icon">
						<li> 
							<a href="#">
								<ion-icon name="logo-facebook"></ion-icon>
							</a>
						</li>
						<li> 
							<a href="#">
								<ion-icon name="logo-instagram"></ion-icon>
							</a>
						</li>
						<li> 
							<a href="#">
								<ion-icon name="logo-twitter"></ion-icon>
							</a>
						</li>
						<li> 
							<a href="#">
								<ion-icon name="logo-twitch"></ion-icon>
							</a>
						</li>
					</ul>

					<p>
						broCode 2023 | All rights reserved.
					</p>					
				</div>	
			</div>
		

			<div class="foot_right">
				<div class="community">
					<p>Community</p>
					<br>
				
					<li><a href="#">blog</a></li>
					<li><a href="#">Forum</a></li>
					<li><a href="#">Our Team</a></li>
					<li><a href="#">Toturials</a></li>
					<li><a href="#">Customer Service</a></li>

				</div>
		
				<div class="legal">
					<p>Legal</p>
					<br>

					<li><a href="#">Copyright Policy</a></li>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Terms of Use</a></li>

				</div>					
			</div>
				

		</footer>

    	<!-- script for footer icon -->
		<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

		<!-- script for scroll bar -->
		<script type="text/javascript">
			let progress = document.getElementById('progressBar');
			let totalHeight	= document.body.scrollHeight - window.innerHeight;

			window.onscroll = function () {
				let progressHeight = (window.pageYOffset/totalHeight) * 100;
				progress.style.height = progressHeight + "%";
			}
		</script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
      AOS.init({
        duration: 2000,
        once: true,
      });



      const mobileBtn = document.getElementById('mobile-cta');
          nav = document.querySelector('nav');
          mobileBtnExit = document.getElementById('mobile-exit');

      mobileBtn.addEventListener('click' , () => {
          nav.classList.add('menu-btn');
      })
        
      mobileBtnExit.addEventListener('click' , () => {
          nav.classList.remove('menu-btn');
      })
  </script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
    duration: 2000,
    once: true,
    });



    const mobileBtn = document.getElementById('mobile-cta');
    nav = document.querySelector('nav');
    mobileBtnExit = document.getElementById('mobile-exit');

    mobileBtn.addEventListener('click' , () => {
    nav.classList.add('menu-btn');
    })

    mobileBtnExit.addEventListener('click' , () => {
    nav.classList.remove('menu-btn');
    })
    </script>

</body>
</html> 
	</body>
</html>