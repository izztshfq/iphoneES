<?php
    if (isset($_GET["submit"])) {    
    // Check if state has been entered
		if (!$_GET['survey']) {
			$errState = 'Please enter your preference';
		}

        if (!$_GET['price']) {
			$errState2 = 'Please enter your preference';
		}

        if (!$_GET['storage']) {
			$errState3 = 'Please enter your preference';
		}
       // If there are no errors, search system
    }
?>

<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
   
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
          <a class="navbar-brand" href="#">iPhone 4U<br><br></a>
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
    <form class="" role="form" action="result.php" method="get">  
    <div class="section">
      <div class="container">   
        <div class="row">
            <div class="col-md-12">
                    <img src="img/logo.png" class="img-responsive text-center"><br/><br/>
                  </div>
          <div class="col-md-12 text-center">
            <div class="form-group">
              <label class="col-md-4 control-label">Display Screen Size</label>
              <div class="col-md-4 selectContainer">
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-search"></i>
                  </span>
                  <select name="screen" id="screen" class="form-control selectpicker">
                    <option value=" ">Choose display screen size</option>
                    <option value="1">3.5"</option>
                    <option value="2">4.0"</option>
                    <option value="3">4.7"</option>
                    <option value="4">5.5"</option>
                  </select>
                </div>
                 <?php echo "<p class='text-danger'>$errState</p>";?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="form-group">
              <label class="col-md-4 control-label">Price</label>
              <div class="col-md-4 selectContainer">
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-search"></i>
                  </span>
                  <select name="price" id="price" class="form-control selectpicker">
                    <option value="">Choose price range</option>
                    <option value="1">&lt; RM500</option>
                    <option value="2">RM500-RM999</option>
                    <option value="3">RM1000-RM1999</option>
                    <option value="4">&gt; RM2500</option>
                    
                  </select>
                </div>
                 <?php echo "<p class='text-danger'>$errState2</p>";?>
              </div>
            </div>
            
          
          </div>
          
        
        </div>
        
     
      </div>
      
    
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="form-group">
              <label class="col-md-4 control-label">Storage Capacity</label>
              <div class="col-md-4 selectContainer">
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-search"></i>
                  </span>
                  <select name="storage" id="storage" class="form-control selectpicker">
                    <option value=" ">Choose storage capacity</option>
                    <option value="1">8GB</option>
                    <option value="2">16GB</option>
                    <option value="3">32GB</option>
                    <option value="4">64GB</option>
                    <option value="5">128GB</option>
                  </select>
                  <?php echo "<p class='text-danger'>$errState3</p>";?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <input id="submit" type="submit" value ="Find me an iPhone"class="btn btn-warning"></input>
  </div>
</div>

  
</form>

</body></html>
