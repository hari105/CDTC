
<style type="text/css">
  .context-dark, .bg-gray-dark, .bg-primary {
    color: rgba(255, 255, 255, 0.8);
}

.footer-classic a, .footer-classic a:focus, .footer-classic a:active {
    color: #ffffff;
}
.nav-list li {
    padding-top: 5px;
    padding-bottom: 5px;
}

.nav-list li a:hover:before {
    margin-left: 0;
    opacity: 1;
    visibility: visible;
}

ul, ol {
    list-style: none;
    padding: 0;
    margin: 0;

}
.about,.links,.contacts,.foot{
  padding: 10px;

}

.social-inner {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    padding: 23px;
    font: 900 13px/1 "Lato", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.5);
}
.social-container .col {
    border: 1px solid rgba(255, 255, 255, 0.1);
}
.nav-list li a:before {
    content: "\f14f";
    font: 400 21px/1 "Material Design Icons";
    color: #4d6de6;
    display: inline-block;
    vertical-align: baseline;
    margin-left: -28px;
    margin-right: 7px;
    opacity: 0;
    visibility: hidden;
    transition: .22s ease;
}
.agifooter{
  position:absolute;
  top:30px;
  left:10px;
  display:flex;
  
}
.agilogo{
  width:60%
}
.section{
  z-index: ;
}
.padding {
  padding:15px;
}
</style>

      <footer class="section footer-classic context-dark bg-image " style="background: rgba(14, 56, 101, 0.9); padding-left: 4%;">
      <div class="row justify-content-center">
            
     
      <div class="col-md-3 col-xl-2 float-right" >
			<br>
      <a  href="https://anurag.edu.in/" target="_blank" title="AGI"><img style="padding-top: 4%;" class="rounded float-left agilogo" src="<?php echo base_url('assets/images/agiLogo.JPG');?>"></a>
     
    </div>
            <div class="col-md-3 col-xl-3 padding">
			<br>
			  <dl class="contact-list">
                <dt>College Website:</dt>
                <dd><a href="https://anurag.edu.in/" target="_blank">https://anurag.edu.in/</a></dd>
              </dl>
              <div class="pr-xl-4 ">
                <!-- Rights-->
                <p class="rights"><span>©  </span><span class="copyright-year">2019</span><span> </span><span>CDTC</span><span>. </span><span>All Rights Reserved.</span></p>
			  </div>
            </div>
            <div class="col-md-3 col-xl-4 contacts padding" style="z-index: 999;">
              
              <dl class="contact-list">
                <br>
                <dt>Address:</dt>
                <dd>Anurag Group of Institutions
Venkatapur, Ghatkesar,<br>
Medchal (Dist.), Hyderabad, 
Telangana, INDIA - 500 088 </dd>
              </dl>
              
            </div>
            <div class="col-md-3 col-xl-2 links padding" ><br>
			<dl class="contact-list">
                <dt>Contacts:</dt>
                <dd><a href="tel:#">+91 99999 88888</a> <br> <a href="tel:#">+91 99999 88888</a>
                </dd>
              </dl>
            </div>
          </div>
      </footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/backToTop.js');?>"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script>
$('.closeMenu').on('click', function(){
     $(".navbar-toggler").click();
});
</script>
  <!-- SCRIPTS -->

  </body>
  </html>
  