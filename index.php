<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        
        <style>
            html,body{
                height:100%;
                
            }
            .container{
                background-image:url("img/weather.jpg");
                width:100%;
                height:100%;
                background-size:cover;
                background-position:center;
                padding-top:150px
            }
            .center{
                text-align:center
            }
            .white{
                color:white
            }
            p{
                padding-top:15px;
                padding-bottom:15px
            }
            button{
                margin-top:15px
            }
            .alert {
                    margin-top:20px;
                    display:none;
            }
        </style>
    </head>
    
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 center white">
                    <h1>Weather Predictore</h1>
                    <p class="lead white">Enter your city below to get forecast weather</p>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" name="city" id="city" placeholder="Eg, London, Paris, San Francisco..."/>
                        </div>
                        <button id="findMyWeather" class="btn btn-success btn-lg">Find My Weather</button>
                    </form>
                </div>
                
            </div>
            <div id="success" class="alert alert-success"></div>
            <div id="fail" class="alert alert-danger">Could not find weather data for that 
city. Please try again.</div>
            <div id="noCity" class="alert alert-danger">Please enter a city!</div>
        </div>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script>
            $("#findMyWeather").click(function(event){
                event.preventDefault();       
                if($("#city").val() != ""){
                    $.get("scraper.php?city="+$("#city").val(),function(data){
                          if(data.contains("Not Found")){
                               $("#success").hide();
                              $("#noCity").hide();
                               $("#fail").fadeIn();
                              
                            
                          }else{
                               $("#fail").hide();
                               $("#noCity").hide();
                             $("#success").html(data).fadeIn();
                          }
                          });
                    
                
            } else{
                     $("#success").hide();
                    $("#fail").hide();
                    $("#noCity").fadeIn();
                  }
                });
        </script>
    </body>
</html>