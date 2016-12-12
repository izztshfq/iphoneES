<?php

$screen = $_GET['screen'];
$price = $_GET['price'];
$storage = $_GET['storage'];
$result1 = 0;
$result2 = 0;
$result3 = 0;
$result4 = 0;


/*
iphone:
1. iphone3g
2. iphone3gs
3. iphone 4
4. iphone 4s
5. iphone 5
6. iphone 5s
7. iphone 5c
8. iphone 6
9. iphone 6plus
10. iphone se
11. iphone 6s
12. iphone 6s plus
13. iphone 7
14. iphone 7plus
15. not applicable


screen(1) 3.5
screen(2) 4.0
screen(3) 4.7
screen(4) 5.5

price(1) 500 
price(2) 500-1000
price(3) 1000-2000
price(4) 2000-3000
price(5) 3000>

storage(1) 8
storage(2) 16
storage(3) 32
storage(4) 64
storage(5) 128


*/

if($screen == 1){
    if($price == 1){
        if($storage ==1){ $result1=1;}
        elseif($storage ==2){ $result1=1; $result2= 2; $result3=3; $result4=4;}
        elseif($storage ==3){ $result1=2; $result2=3; $result3 =4;}
        elseif($storage ==4){$result1=4; }
        elseif($storage ==5){ $result1=15;}
    }
    elseif($price == 2){
        if($storage ==1){ $result1=15;}
        elseif($storage ==2){ $result1=15;}
        elseif($storage ==3){ $result1=15;}
        elseif($storage ==4){ $result1=15;}
        elseif($storage ==5){ $result1=15;}
    }
    elseif($price == 3){
        if($storage ==1){ $result1=15;}
        elseif($storage ==2){ $result1=15;}
        elseif($storage ==3){$result1=15; }
        elseif($storage ==4){ $result1=15;}
        elseif($storage ==5){ $result1=15;}
    }
    elseif($price == 4){
        if($storage ==1){ $result1=15;}
        elseif($storage ==2){$result1=15;}
        elseif($storage ==3){ $result1=15;}
        elseif($storage ==4){$result1=15; }
        elseif($storage ==5){ $result1=15;}
    }

}

elseif($screen == 2){
    if($price == 1){
        if($storage ==1){ $result1=15;}
        elseif($storage ==2){ $result1=15;}
        elseif($storage ==3){ $result1=15;}
        elseif($storage ==4){ $result1=15;}
        elseif($storage ==5){$result1=15; }
    }
    elseif($price == 2){
        if($storage ==1){ $result1=15;}
        elseif($storage ==2){$result1=5; }
        elseif($storage ==3){$result1=5; }
        elseif($storage ==4){$result1=5; }
        elseif($storage ==5){ $result1=15;}
    }
    elseif($price == 3){
        if($storage ==1){ $result1=15;}
        elseif($storage ==2){ $result1=15;}
        elseif($storage ==3){$result1=6;$result2=7;$result3=10; }
        elseif($storage ==4){ $result1=10;$result2=6;}
        elseif($storage ==5){$result1=15; }
    }
    elseif($price == 4){
        if($storage ==1){ $result1=15;}
        elseif($storage ==2){ $result1=15;}
        elseif($storage ==3){ $result1=15;}
        elseif($storage ==4){ $result1=15;}
        elseif($storage ==5){$result1=15; }
    }
}

elseif($screen == 3){
    if($price == 1){
        if($storage ==1){ $result1=15;}
        elseif($storage ==2){$result1=15; }
        elseif($storage ==3){$result1=15; }
        elseif($storage ==4){ $result1=15;}
        elseif($storage ==5){ $result1=15;}
    } 
    elseif($price == 2){
        if($storage ==1){ $result1=15;}
        elseif($storage ==2){ $result1=15;}
        elseif($storage ==3){ $result1=15;}
        elseif($storage ==4){ $result1=15;}
        elseif($storage ==5){ $result1=15;}
    }
    elseif($price == 3){
        if($storage ==1){ $result1=15;}
        elseif($storage ==2){$result1=8; }
        elseif($storage ==3){ $result1=8;}
        elseif($storage ==4){ $result1=8;}
        elseif($storage ==5){$result1=15; }
    }
    elseif($price == 4){
        if($storage ==1){ $result1=15;}
        elseif($storage ==2){ $result1=11; $result2=13;}
        elseif($storage ==3){$result1=15; }
        elseif($storage ==4){$result1=11; $result2=13; }
        elseif($storage ==5){$result1=11; $result2=13; }
    }
}
elseif($screen == 4){
    if($price == 1){
        if($storage ==1){ $result1=15;}
        elseif($storage ==2){$result1=15; }
        elseif($storage ==3){$result1=15; }
        elseif($storage ==4){$result1=15; }
        elseif($storage ==5){$result1=15; }
    }
    elseif($price == 2){
        if($storage ==1){$result1=15;}
        elseif($storage ==2){$result1=15; }
        elseif($storage ==3){$result1=15; }
        elseif($storage ==4){ $result1=15;}
        elseif($storage ==5){ $result1=15;}
    }
    elseif($price == 3){
        if($storage ==1){ $result1=15;}
        elseif($storage ==2){ $result1=15;}
        elseif($storage ==3){ $result1=15;}
        elseif($storage ==4){$result1=15; }
        elseif($storage ==5){ $result1=15;}
    }
    elseif($price == 4){
        if($storage ==1){ $result1=15;}
        elseif($storage ==2){$result1=9; }
        elseif($storage ==3){ $result1=14;}
        elseif($storage ==4){ $result1=9; $result=14;}
        elseif($storage ==5){$result1=9; $result=14; }
    }
}
?>
<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
   <link href="index.css" rel="stylesheet" type="text/css">

  </head><body>
    <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><span>iPhone 4u</span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
              <a href="#">Home</a>
            </li>
            <li>
              <a href="#">Contacts</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <?php if ($result1 != 15): ?>
   <div class="section">
      
        
              <div class="center-block container">
                <div class="row">
                  <div class="col-md-9">
                    
                    <h3>We found something for you!</h3>
                  </div>
                </div>
              </div>
            
          
    </div>
    <?php endif; 
    if ($result1 == 1): ?>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section">
              <div class="center-block container">
                <div class="row">
                  <div class="col-md-3">
                    <img src="img/iphone3g.png" class="img-responsive">
                  </div>
                  <div class="col-md-9">
                    <h1>iPhone 3G&nbsp;</h1>
                    <h4>Release in July 2008</h4>
                    <p>Spcification:<br>
                      Display screen size: 3.5" <br>
                      Memory capacity: 8/16 GB <br>
                      RAM: 128mb <br>
                      Camera: 2MP (Primary) N/A (Secondary) <br>
                      OS: iOS, upgradable to iOS 4.2.1 <br>
                      Body dimension: 115.5 x 62.1 x 12.3 mm (4.55 x 2.44 x 0.48 in)
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; 
    if ($result1 == 2 || $result2 ==2): ?>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section">
              <div class="center-block container">
                <div class="row">
                  <div class="col-md-3">
                    <img src="img/iphone3g.png" class="img-responsive">
                  </div>
                  <div class="col-md-9">
                    <h1>iPhone 3G s</h1>
                    <h4>Release in June 2009</h4>
                    <p>Spcification:<br>
                      Display screen size: 3.5" <br>
                      Memory capacity: 8/16/32 GB <br>
                      RAM: 256mb <br>
                      Camera: 3.15MP (Primary) N/A (Secondary) <br>
                      OS: iOS 3, upgradable to iOS 6.1.6 <br>
                      Body dimension: 115.5 x 62.1 x 12.3 mm (4.55 x 2.44 x 0.48 in)
                      </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; 
    if ($result1 == 3 || $result2 ==3 || $result3==3): ?>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section">
              <div class="center-block container">
                <div class="row">
                  <div class="col-md-3">
                    <img src="img/iphone4.png" class="img-responsive">
                  </div>
                  <div class="col-md-9">
                    <h1>iPhone 4&nbsp;</h1>
                    <h4>Release in June 2010</h4>
                    <p>Spcification:<br>
                      Display screen size: 3.5" <br>
                      Memory capacity: 8/16/32 GB <br>
                      RAM: 512mb <br>
                      Camera: 5MP (Primary) VGA (Secondary) <br>
                      OS: iOS 4, upgradable to iOS 7.1.2 <br>
                      Body dimension: 115.5 x 58.6 x 9.3 mm (4.54 x 2.31 x 0.37 in)
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; 
    if ($result1 == 4 || $result2 ==4 || $result3==4 ||$result4==4): ?>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section">
              <div class="center-block container">
                <div class="row">
                  <div class="col-md-3">
                    <img src="img/iphone4.png" class="img-responsive">
                  </div>
                  <div class="col-md-9">
                    <h1>iPhone 4s&nbsp;</h1>
                    <h4>Release in October 2011</h4>
                    <p>Spcification:<br>
                      Display screen size: 3.5" <br>
                      Memory capacity: 8/16/32/64 GB <br>
                      RAM: 512mb <br>
                      Camera: 8MP (Primary) VGA (Secondary) <br>
                      OS: iOS 5, upgradable to iOS 9.3.5 <br>
                      Body dimension: 115.5 x 58.6 x 9.3 mm (4.54 x 2.31 x 0.37 in)
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; 
    if ($result1 == 5): ?>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section">
              <div class="center-block container">
                <div class="row">
                  <div class="col-md-3">
                    <img src="img/iphone5.jpg" class="img-responsive">
                  </div>
                  <div class="col-md-9">
                    <h1>iPhone 5&nbsp;</h1>
                    <h4>Release in September 2012</h4>
                    <p>Spcification:<br>
                      Display screen size: 4.0" <br>
                      Memory capacity: 16/32/64 GB <br>
                      RAM: 1GB <br>
                      Camera: 8MP (Primary) 1.2MP (Secondary) <br>
                      OS: iOS 6, upgradable to iOS 10.1(Present) <br>
                      Body dimension: 123.8 x 58.6 x 7.6 mm (4.87 x 2.31 x 0.30 in)
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; 
    if ($result1 == 6 || $result2 ==6 || $result3==6): ?>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section">
              <div class="center-block container">
                <div class="row">
                  <div class="col-md-3">
                    <img src="img/iphone5s.png" class="img-responsive">
                  </div>
                  <div class="col-md-9">
                    <h1>iPhone &nbsp;5s</h1>
                    <h4>Release in September 2013</h4>
                    <p>Spcification:<br>
                      Display screen size: 4.0" <br>
                      Memory capacity: 16/32/64 GB <br>
                      RAM: 1GB <br>
                      Camera: 8MP (Primary) 1.2MP (Secondary) <br>
                      OS: iOS 7, upgradable to iOS 10.1(Present) <br>
                      Body dimension: 123.8 x 58.6 x 7.6 mm (4.87 x 2.31 x 0.30 in)
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; 
    if ($result1 == 7 || $result2 ==7 || $result3==7 ||$result4==7): ?>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section">
              <div class="center-block container">
                <div class="row">
                  <div class="col-md-3">
                    <img src="img/iphone5c.png" class="img-responsive">
                  </div>
                  <div class="col-md-9">
                    <h1>iPhone 5c</h1>
                    <h4>Release in September 2013</h4>
                    <p>Spcification:<br>
                      Display screen size: 4.0" <br>
                      Memory capacity: 8/16/32 GB <br>
                      RAM: 1GB <br>
                      Camera: 8MP (Primary) 1.2MP (Secondary) <br>
                      OS: iOS 7, upgradable to iOS 10.1(Present) <br>
                      Body dimension: 124.4 x 59.2 x 9 mm (4.90 x 2.33 x 0.35 in)
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <?php endif; 
    if ($result1 == 8 || $result2 ==8 || $result3==8 ||$result4==8): ?>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section">
              <div class="center-block container">
                <div class="row">
                  <div class="col-md-3">
                    <img src="img/iphone6.png" class="img-responsive">
                  </div>
                  <div class="col-md-9">
                    <h1>iPhone 6</h1>
                    <h4>Release in September 2014</h4>
                    <p>Spcification:<br>
                      Display screen size: 4.7" <br>
                      Memory capacity: 16/64/128 GB <br>
                      RAM: 1GB <br>
                      Camera: 8MP (Primary) 1.2MP (Secondary) <br>
                      OS: iOS 8, upgradable to iOS 10.1(Present) <br>
                      Body dimension: 138.1 x 67 x 6.9 mm (5.44 x 2.64 x 0.27 in)
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <?php endif; 
    if ($result1 == 9 || $result2 ==9 || $result3==9 ||$result4==9): ?>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section">
              <div class="center-block container">
                <div class="row">
                  <div class="col-md-3">
                    <img src="img/iphone6plus.jpg" class="img-responsive">
                  </div>
                  <div class="col-md-9">
                    <h1>iPhone 6 Plus&nbsp;</h1>
                    <h4>Release in September 2014</h4>
                    <p>Spcification:<br>
                      Display screen size: 5.5" <br>
                      Memory capacity: 16/64/128 GB <br>
                      RAM: 1GB <br>
                      Camera: 8MP (Primary) 1.2MP (Secondary) <br>
                      OS: iOS 8, upgradable to iOS 10.1(Present) <br>
                      Body dimension: 158.1 x 77.8 x 7.1 mm (6.22 x 3.06 x 0.28 in)
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <?php endif; 
    if ($result1 == 10 || $result2 ==10 || $result3==10 ||$result4==10): ?>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section">
              <div class="center-block container">
                <div class="row">
                  <div class="col-md-3">
                    <img src="img/iphoneSE.jpg" class="img-responsive">
                  </div>
                  <div class="col-md-9">
                    <h1>iPhone SE</h1>
                    <h4>Release in March 2016</h4>
                    <p>Spcification:<br>
                      Display screen size: 4.0" <br>
                      Memory capacity: 16/64GB <br>
                      RAM: 2GB <br>
                      Camera: 12MP (Primary) 1.2MP (Secondary) <br>
                      OS: iOS 9.3.2, upgradable to iOS 10.1(Present) <br>
                      Body dimension: 123.8 x 58.6 x 7.6 mm (4.87 x 2.31 x 0.30 in)
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <?php endif; 
    if ($result1 == 11 || $result2 ==11 || $result3==11 ||$result4==11): ?>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section">
              <div class="center-block container">
                <div class="row">
                  <div class="col-md-3">
                    <img src="img/iphone6.png" class="img-responsive">
                  </div>
                  <div class="col-md-9">
                    <h1>iPhone 6s</h1>
                    <h4>Release in September 2015</h4>
                    <p>Spcification:<br>
                      Display screen size: 4.7" <br>
                      Memory capacity: 16/32/64/128 GB <br>
                      RAM: 2GB <br>
                      Camera: 8MP (Primary) 1.2MP (Secondary) <br>
                      OS: iOS 9, upgradable to iOS 10.1(Present) <br>
                      Body dimension: 138.1 x 67 x 7.1 mm (5.44 x 2.64 x 0.28 in)
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; 
    if ($result1 == 12 || $result2 ==12 || $result3==12 ||$result4==12): ?>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section">
              <div class="center-block container">
                <div class="row">
                  <div class="col-md-3">
                    <img src="img/iphone6plus.jpg" class="img-responsive">
                  </div>
                  <div class="col-md-9">
                    <h1>iPhone 6s Plus</h1>
                    <h4>Release in September 2015</h4>
                    <p>Spcification:<br>
                      Display screen size: 5.5" <br>
                      Memory capacity: 16/32/64/128 GB <br>
                      RAM: 2GB <br>
                      Camera: 12MP (Primary) 5MP (Secondary) <br>
                      OS: iOS 9, upgradable to iOS 10.1(Present) <br>
                      Body dimension: 158.1 x 77.9 x 7.3 mm (6.23 x 3.07 x 0.29 in)
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; 
    if ($result1 == 13 || $result2 ==13 || $result3==13||$result4==13): ?>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section">
              <div class="center-block container">
                <div class="row">
                  <div class="col-md-3">
                    <img src="img/iphone7.png" class="img-responsive">
                  </div>
                  <div class="col-md-9">
                    <h1>iPhone 7&nbsp;</h1>
                    <h4>Release in September 2016</h4>
                    <p>Spcification:<br>
                      Display screen size: 4.7" <br>
                      Memory capacity: 32/128 GB <br>
                      RAM: 2GB <br>
                      Camera: 12MP (Primary) 7MP (Secondary) <br>
                      OS: iOS 10.0.1, upgradable to iOS 10.1(Present) <br>
                      Body dimension: 138.1 x 67.1 x 7.1 mm (5.44 x 2.64 x 0.28 in)
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; 
    if ($result1 == 14 || $result2 ==14 || $result3==14 ||$result4==14): ?>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section">
              <div class="center-block container">
                <div class="row">
                  <div class="col-md-3">
                    <img src="img/iphone7plus.png" class="img-responsive">
                  </div>
                  <div class="col-md-9">
                    <h1>iPhone 7 Plus</h1>
                    <h4>Release in September 2016</h4>
                    <p>Spcification:<br>
                      Display screen size: 5.5" <br>
                      Memory capacity: 32/128 GB <br>
                      RAM: 3GB <br>
                      Camera: Dual 12MP (Primary) 7MP (Secondary) <br>
                      OS: iOS 10.0.1, upgradable to iOS 10.1(Present) <br>
                      Body dimension: 158.2 x 77.9 x 7.3 mm (6.23 x 3.07 x 0.29 in)
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; 
    if ($result1 == 15): ?>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section">
              <div class="center-block container">
                <div class="row">
                  <div class="col-md-9">
                    <h1>Sorry!</h1>
                    <h3>We can't find an iPhone suggestion for your criteria, please try again
                      with different criteria.</h3>
                    <a href="index.php" class="btn btn-warning">Try Again</a>
                  </div>
                  <div class="col-md-3">
                    <img src="img/sorry.png" class="img-responsive">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; 
    ?>
  

</body></html>