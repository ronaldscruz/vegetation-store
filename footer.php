<style>
	#footer{
	position: relative;
    left: 0;
    bottom: 0;
    margin: 70px 0px 0px 0px;
    color: white;
    font-size: .9em;
    padding: 20px 30px 5px 25px;
    padding-bottom: 5px;
    background-color: #151515;    
	}

	.midia{
		margin-left: 10px;
		filter: grayscale(100%);
	    -webkit-filter: grayscale(100%);
	    -moz-filter: grayscale(100%);
	    -ms-filter: grayscale(100%);
	    -o-filter: grayscale(100%);
	    transition: all 0.2s ease;
	}

	.midia:hover{
		filter: grayscale(0%);
	    -webkit-filter: grayscale(0%);
	    -moz-filter: grayscale(0%);
	    -ms-filter: grayscale(0%);
	    -o-filter: grayscale(0%);
	}

	#telefone{
		text-align: left;
	}

	#gp-midias{
		text-align: right;
	}

	#git{
		color: #fff;
		background-color: #000;
		text-align: center;
	}

	a #git{
		text-decoration: none;
		color: #fff;
	}

	@media only screen and (max-width: 768px){
		#telefone{
			text-align: center;
		}

		#gp-midias{
			text-align: center;
		}
	}
</style>
<footer id="footer">
	<div class="row">
		<div class="col-md-6 col-sm-12" id="telefone">
			<p><ion-icon name="call"></ion-icon> Telefone: (11)2323-9878 / (13) 2392-2938</p>
		</div>
		<div class="col-md-6 col-sm-12" id="gp-midias">
			<p> 
				<a href="#"><img src='img/social/instagram_0.png' class="midia" id="instagram" onmouseout="this.src='img/social/instagram_0.png'" onmouseover="this.src='img/social/instagram_1.png';" width="32px"></a>
				<a href="#"><img src='img/social/facebook_0.png' class="midia" id="facebook" onmouseout="this.src='img/social/facebook_0.png'" onmouseover="this.src='img/social/facebook_1.png';" width="32px"></a>
				<a href="#"><img src='img/social/whatsapp_0.png' class="midia" id="whatsapp" onmouseout="this.src='img/social/whatsapp_0.png'" onmouseover="this.src='img/social/whatsapp_1.png';" width="32px"></a>
			</p>
		</div>
	</div>
</footer>
