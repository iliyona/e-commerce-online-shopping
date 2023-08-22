 <div id="contact-page" class="container">
        <div class="bg">
            <div class="row">           
                <div class="col-sm-12">                         
                    <h2 class="title text-center">OUR  <strong>MEMBERS</strong></h2>                                                      
                    <!--<div id="gmap" class="contact-map">
                    </div>-->
                    	<section>
	<div class="card">
	    <div class="box">
		    <div class="imgbox">
			    <img src="images/home/pikacu.jpg">
		    </div>
			<div class="contentBx">
			    <div>
				   <h2> NUR AFIQAH BINTI SAMSUL BAHARIN</h2>
				   <p><i>2018662998</i> </p>
                   <p><i>CS1105D</i> </p>
                   <p><i>meafqh@gmail.com</i> </p>
			    </div>
		    </div>
		</div>
	</div>
    <div class="card">
	    <div class="box">
		    <div class="imgbox">
			    <img src="images/home/liya2.png">
		    </div>
			<div class="contentBx">
			    <div>
				   <h2>NUR ILIYA SHAFIQA BINTI ABDUL AZIZ</h2>
				   <p> <i>2018407052</i> </p>
                   <p><i>CS1105D</i> </p>
                    <p><i>iliyaaziz10@gmail.com</i> </p>
			    </div>
		    </div>
		</div>
	</div>
    <div class="card">
	    <div class="box">
		    <div class="imgbox">
			    <img src="images/home/nad2.jpg">
		    </div>
			<div class="contentBx">
			    <div>
				   <h2> NADIA ZAHEERA BINTI ZAHROL </h2>
				   <p><i>2018413004</i> </p>
                   <p><i>CS1105D</i> </p>
                    <p><i>nadiazaheera66@gmail.com</i> </p>
			    </div>
		    </div>
		</div>
	</div>
    <div class="card">
	    <div class="box">
		    <div class="imgbox">
			    <img src="images/home/arfa.png">
		    </div>
			<div class="contentBx">
			    <div>
				   <h2> NUR HANEESA ARFA BINTI ARMAN</h2>
				   <p><i>2018220152</i> </p>
                   <p><i>CS1105D</i> </p>
                    <p><i>hauraarfa1404@gmail.com</i> </p>
			    </div>
		    </div>
		</div>
	</div>
   
                    
                    </section>
                
                </div>                  
            </div>      
            <div class="row">   
                <div class="col-sm-8">
                    <div class="contact-form">
                        <h2 class="title text-center">Get In Touch</h2>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
                            </div>                        
                            <div class="form-group col-md-12">
                                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-info">
                        <h2 class="title text-center">Contact Info</h2>
                        <address>
                            <p>KNITWEAR-CO</p>
                            <p>206, Jalan Tun Sambhatan Brickfields, 50470</p>
                            <p>Kuala Lumpur, Malaysia</p>
                            <p>Mobile: +60 126226842 </p>
                            <p>Fax: 60-252-0026</p>
                            <p>Email: knitwearCo@gmail.com</p>
                        </address>
                        <div class="social-networks">
                            <h2 class="title text-center">Computer Science</h2>
                            <ul>
                                <li>
                                    <a href="https://www.instagram.com/"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>              
            </div>  
        </div>  
    </div><!--/#contact-page-->
<style>
section
{
	
	justify-content: center;
	
	
	width: 80%;
	min-height: 500px;
	margin: 70px auto 0;
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
    
	
}
section .card
{
	/*width:1200px;
	min-height: 500px;
	background: #fff;
	margin: 70px auto 0;
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;*/
	
	position: relative;
	width: 320px;
	height: 320px;
	margin: 20px;
    transform-style: preserve-3d;
	perspective: 1000px;
	
	
	
}
section .card .box
{
	position: absolute;
	top:0;
	left:0;
	width: 100%;
	height: 100%;
	transform-style: preserve-3d;
	transition: 1s ease;
}
section .card:hover .box
{
	transform: rotateY(180deg);
}
section .card .box .imgbox
{
	position: absolute;
	top:0;
	left:0;
	width: 50%;
	height: 50%;
}
section .card .box .imgbox img
{
	position: absolute;
	top:0;
	left:0;
	width: 50%
	height: 50%;
	object-fit: cover;
}
section .card .box .contentBx
{
	position: absolute;
	top:0;
	left:0;
	width: 100%;
	height: 100%;
	background: #333;
	backface-visibility: hidden;
	display: flex;
	justify-content: center;
	align-items: center;
	transform-style: preserve-3d;
	transform:rotateY(180deg);
}
section .card .box .contentBx div
{
	transform-style: preserve-3d;
	padding: 20px;
	background: linear-gradient(45deg, #fe0061, #ffeb3b);
	transform: translateZ(100px);
}
section .card .box .contentBx div h2
{
	color: #fff;
	font-size: 20px;
	letter-spacing: 1px;
	
}
section .card .box .contentBx div p
{
	color: #fff;
	font-size: 16px;
	
	
}
</style>