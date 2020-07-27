<style>
   @media (max-width: 767px) {
       .nri-bg {
    background-image: url("../assets/images/mobile-01.jpg");
    background-size: cover;
    height: 100%;
    padding: 390px 50px 0px;
    background-position: 100% 100%;
    margin-top: -150px;
    }
}
@media (min-width: 768px) {

    
       .nri-bg {
        background-image: url(../assets/images/slide-01.jpg);
    background-size: cover;
    height: 441px;
    /* padding: 390px 50px 0px; */
    background-position: 100% 100%;
    margin-top: 0px;
    }

    
.hero-text {
    text-align: center;
    position: absolute;
    left: 50%;
    bottom: 20%;
    transform: translate(-50%, -50%);
    color: black;
}

}
    .nri-bg h3 {
    color: #000000;
    /* float: right; */
    text-align: center;
    font-weight: bold;
    font-family: 'Lato', sans-serif;
    /* font-style: italic; */
    font-size: 35px;
    margin-top: 31%;
}
    }
    .link ,.link a{
        color: #74797d;
        text-decoration: none;
        font-size: 17px;
    }
    /* footer {
        background: #e9e5e4;
        padding-top: 40px;
        opacity: 0.9;
        background-image: url("../assets/img/img1.jpg");
        background-position: 100% 100%;
        background-size: cover;
    } */
    .circle {
    /* background: #456BD9; */
    border-radius: 50%;
    color: #fff;
    height: 10em;
    position: relative;
    width: 10em;
    margin-left:100px;
    margin-right:10px;
    margin-bottom: 16px;
    text-align:center;

    }
    .WHITE{
        color:#fff;
        /* margin-bottom:20px; */
    }

    .objective{
        background-image: url("../assets/img/listing-bg.png");
        background-size: cover;
        padding: 10px;
        margin-bottom: 20px;
    }
        .clients table td {
            padding: 5px 15px;
        }
        .first-title{
            background-color: #fff;
            color: #d57d3d !important;
            padding: 0 2%;
            position:absolute;
            left: -10.3%;
            font-weight: bold;
            top: 44%;
            -webkit-transform: rotate(-90deg);
            -moz-transform: rotate(-90deg);
            -ms-transform: rotate(-90deg);
            -o-transform: rotate(-90deg);
            transform: rotate(-90deg);
        }
        .second-title{
            background-color: #fff;
            color: #d57d3d !important;
            padding: 0 2%;
            position:absolute;right: -6.2%;
            font-weight: bold;
            top: 40%;
            -webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            transform: rotate(90deg);
        }
        .aboutContent{
            border-left: 2px solid #000;padding: 10px 9%; position:relative; min-height: 250px
        }
        .secondContent{
            border-right: 2px solid #000;padding: 10px 9%; position:relative; min-height: 250px
        }

    @media (min-width: 320px) and (max-width: 1024px) {
        .first-title{
            text-align: center;
            position:relative;
            left: 0;
            font-weight: bold;
            top: 0;
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        .second-title{
            text-align: center;
            position:relative;
            top: 0;
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        .aboutContent{
            border-left: none; position:relative;
           /*text-align: justify;*/
        }
        .secondContent{
            border-right: none; position:relative;
           /* text-align: justify;*/
        }

    }
    .orange-text{
        text-align: center;
        padding: 10px;
        margin: 53px -30px 49px;
        background: #f7771b;
        color: white;
    }

    .orangeText
    {
        color:#f7771b;
        font-size: 23px;
        font-weight: bold;
    }
    .blackText
    {
        color:black;
        font-size: 23px;
        font-weight:bold;
    }

    .about-para li{
      margin-bottom:8px;
      font-weight: 500;
      font-size: 15px;
    }
    .about-para p{
        font-size: 15px;
        font-weight: 500;
    }
    #nricontect{
        margin-top:20px;
    }
    .aboutContent {
    border-left: 2px solid #00000012;
    
}
    .secondContent {
        border-right: 2px solid #00000012;
        font-size: 18px;
        
    }

  

</style>
<div class="container-fluid">
    <div class="row nri-bg">
   
        <div class="container">
        
            <div class="row">
                <div class="col-sm-12">
                
                    <div class="col-sm-12 pull-right">
                        <h3>NRI Corner</h3>
                    </div>
                </div>
            </div>
            
        </div>
       
    </div>
</div>
   <div class="container">
        <div class="col-sm-12 link">
                    <a href="<?= site_url() ?>">Home</a> >> NRI
                </div>
        </div>
    </div>
   <div class="container" id="nricontect">
        <div class="about-para">
                 <?= $this->aboutUs_model->getOption('nri_first_title') ?> 
        </div>
        
        <br>
        <br>
       <div class="about-para">
          <?= $this->aboutUs_model->getOption('nri_second_content') ?> 

          </div> 
    </div>
    <div class="container">
        <div class="col-sm-12 text-center">
                <h2 class="nricolor">PRIMARY OBJECTIVE </h2> 
            </div>
       <!-- <div class="row objective">
             <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4 circle">
                    <img src="../assets/img/trust1.png">
                    <span>ABCDdsbfjehrjhtr</span>
                    </div>
                    <div class="col-md-4 circle">
                    <img src="../assets/img/trust2.png">
                    <span>ABCD</span>
                    </div>
                    <div class="col-md-4 circle">
                    <img src="../assets/img/trust3.png">
                    <span>ABCDgfbgdhjuikui</span>
                    </div>
                    <div class="col-md-4 circle">
                    <img src="../assets/img/trust4.png">
                    <span>ABCD</span>
                    </div>
                </div>
            </div> -->
            <div class="row about-content objective ">
                <div class="col-sm-3 col-md-3 col-lg-3 text-center">
                    <div class="" style="background-image: url('<?= base_url('assets/img/trust4.png');?>');background-size: cover;background-repeat: no-repeat;width: 133px;height:130px;border-radius: 50%;display: inline-block;"></div>
                     <div class="text-center">
                        <strong></strong><br>
                        <span class="WHITE">Recognising clients Requirement</span>
                      </div>
                </div>

                <div class="col-sm-3 col-md-3 col-lg-3 text-center">
                    <div class="" style="background-image: url('<?= base_url('assets/img/trust1.png');?>');background-size: cover;background-repeat: no-repeat;width: 133px;height:130px;border-radius: 50%;display: inline-block;"></div>
                     <div class="text-center">
                        <strong></strong><br>
                        <span class="WHITE">Comprehension and Evaluation</span>
                      </div>
                </div>

                <div class="col-sm-3 col-md-3 col-lg-3 text-center">
                    <div class="" style="background-image: url('<?= base_url('assets/img/trust2.png');?>');background-size: cover;background-repeat: no-repeat;width: 133px;height:130px;border-radius: 50%;display: inline-block;"></div>
                     <div class="text-center">
                        <strong></strong><br>
                        <span class="WHITE">Offering relevant services</span>
                      </div>
                </div>

                <div class="col-sm-3 col-md-3 col-lg-3 text-center">
                    <div class="" style="background-image: url('<?= base_url('assets/img/trust3.png');?>');background-size: cover;background-repeat: no-repeat;width: 133px;height:130px;border-radius: 50%;display: inline-block;"></div>
                     <div class="text-center">
                        <strong></strong><br>
                        <span class="WHITE">Arrange special discount</span>
                      </div>
                </div>
    </div>
        </div>
    </div>
    <br>
    <div class="container">
       <div class="col-sm-12">
            <h3> <?= $this->aboutUs_model->getOption('nri_second_title') ?> </h3>
        </div>
        <br>
        <br>
       <div class="about-para">
          <?= $this->aboutUs_model->getOption('nri_second_content') ?> 

          </div> 
     </div> 
