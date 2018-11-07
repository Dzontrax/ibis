
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" 
    integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="custom.css">
  </head>

  <body>
<div class="row">
    <div class="col-xl-1 col-xs-12" style="background-color: #021844; margin:0">

    </div>
    <div class="col-xl-11 col-xs-12" style="background-color: #F5F5F5;padding-left: 0;">



    <header>

    <div class="container-fluid reportHeader">
    <a class="navbar-brand" href="#">Report</a>
    </div>
          
    </header>
    <div class="container-fluid" >
        <div class="row">
            <div class="col-xl-12 col-xs-12">
                <form id="forma" name="forma" class="form-inline" style="height: 50px;" method="get" action="result.php">
                        <input class="form-control mr-sm-2 searchField" id="mac" name="mac" type="text" placeholder="MAC Address" aria-label="MAC Address">
                        <input class="form-control mr-sm-2 searchField" id="contract" name="contract" type="text" placeholder="Contract No" aria-label="Contract No">
                        <button class="btn btn-outline-success my-2 my-sm-0 applyFilterbtn" onclick="myFunction()">Filter</button>
                        <button class="btn btn-outline-success my-2 my-sm-0 resetFiltersBtn float-xs-left float-right" type="submit" ><i class="fas fa-filter"></i> Reset filters</button>

                </form>
            </div>
        </div>
        <ul class="list-group" id="result" style="width: 200px; margin-left: 5px; position: relative; top: 10px;"></ul>
        <br />
    </div>
  
    <script>
            function myFunction() {
                var x = document.getElementById("forma");
                var text = "";
                var i;
                for (i = 0; i < x.length ;i++) {
                    text += x.elements[i].value + "<br>";
                }
                document.getElementById("demo").innerHTML = text;
            }
</script>

    <div class="container-fluid">
    
            <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Tables</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Graphs</a>
                    </div>
            </nav>

            <div class="tab-content" id="nav-tabContent">

            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        
               <div class="row">
                   
                  
                                </div> <!--end row -->
                                
                            </div>
                            
                        </div>

                   </div>


<!-- nova dupla kolona -->


                   <div class="col-xl-5 col-xs-12">

                       <div class="row">

                           
                            </div>


                            <div class="col-xl-6 col-xs-12">
                            <div class="row">


                   <!-- end col-xl-5 -->


                   

               </div>
                
                
        
            </div>

            
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="row">
                    <div class="col-xl-6 col-xs-12">
                        

                    </div>
                    <div class="col-xl-6 col-xs-12">
                        
                    </div>
                    
                   
                </div>
                <div class="row">

                    <div class="col-xl-6 col-xs-12">
                        

                    </div>
                    <div class="col-xl-6 col-xs-12">
                        
                    </div>


                </div>
                <div class="row">

                    <div class="col-xl-6 col-xs-12">
                        
                    </div>

                      <div class="col-xl-6 col-xs-12">
                        

                    </div>
                
                
              </div>  
              
            
            

    </div>
    </div> 
    <!-- end xl-11 -->
   </div>
   <!-- end master-row -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>  -->
  

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="js/search.js"></script>
   




  </body>

  
</html>
