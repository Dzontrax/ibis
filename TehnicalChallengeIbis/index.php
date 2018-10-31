
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
                <form name="forma" class="form-inline" style="height: 50px;">
                        <input class="form-control mr-sm-2 searchField" id="mac" name="mac" type="text" placeholder="MAC Address" aria-label="MAC Address">
                        <input class="form-control mr-sm-2 searchField" id="contract" name="contract" type="text" placeholder="Contract No" aria-label="Contract No">
                        <button class="btn btn-outline-success my-2 my-sm-0 applyFilterbtn" type="submit">Filter</button>
                        <button class="btn btn-outline-success my-2 my-sm-0 resetFiltersBtn float-xs-left float-right" type="submit"><i class="fas fa-filter"></i> Reset filters</button>

                </form>
            </div>
        </div>
        <ul class="list-group" id="result" style="width: 200px; margin-left: 5px; position: relative; top: 10px;"></ul>
        <br />
    </div>

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
                   
                   <div class="col-xl-5 col-xs-12">

                       <div class="row">
                           <div class="col-xl-6 col-xs-12">
                               <div class="row">
                                   <div class="col-xl-12 col-xs-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <p>Overall status</p><div class="btn btn-warning float-right">Medium</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-xs-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <p>RSS status</p><div class="btn btn-danger float-right">Bad</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-xs-12">
                                        <div class="card">
                                            <div class="card-body">
                                             <p>Client RSS status</p><div class="btn btn-warning float-right">Medium</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-xs-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <p>Overall status</p><div class="btn btn-success float-right">Good</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-xs-12">
                                        <div class="card">
                                            <div class="card-body">
                                            <p>Interference status</p><div class="btn btn-warning float-right">Medium</div><br />
                                            <p>Interference status channel</p><div class="btn btn-danger float-right">Bad</div><br />
                                            <p>Interference status adjacent</p><div class="btn btn-success float-right">Good</div><br />
                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-xs-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <p>HGw Interference</p><br />
                                                <p calss="float-left"style="font-size: 9px">Unifi</p><div class="btn btn-success float-right">Good</div><br /><p style="font-size: 9px">Home</p><div class="btn btn-warning float-right">Medium</div><br />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-xs-12">
                                        <div class="card">
                                            <div class="card-body">
                                            <p>Retransmission status</p><div class="btn btn-danger float-right">Bad</div><br />
                                            <p class="d-inline">HGw number of retransmissions</p><p class="float-right d-inline">5515</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-xs-12">
                                        <div class="card">
                                            <div class="card-body">
                                            <p class="d-inline">Total number of clients</p><p class="float-right d-inline">120</p><br />
                                            <p class="d-inline">Total number of clients</p><p class="float-right d-inline">120</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-xs-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h6>HGw combined status</h6>
                                                <p>HGw number of clients</p><p class="float-right">15</p><br>
                                                <p>Maximum number of concurent clients</p><p class="float-right">2</p><br>
                                                <p>Data tranfered</p><p class="float-right">5.7</p>


                                            </div>
                                        </div>
                                    </div>
                               </div>
                                
                            </div>
                            <div class="col-xl-6 col-xs-12">

                                 <div class="row">

                                        <div class="col-xl-12 col-xs-12">
                                            <div class="card" style="padding: 0">

                                                <div class="card-body" style="font-size: 9px; color: blue;">
                                                        <h6 class="card-title">HGw bitereate [Mbps]</h6>

                                                         <table>
                                                            <td class="col-xl-4" style="padding:0 !important;">KPI name </td>
                                                            <td class="col-xl-2">Min</td>
                                                            <td class="col-xl-2">Avg</td>
                                                            <td class="col-xl-2">Max</td>
                                                            <td class="col-xl-2">Last</td>
                                                        </table>
                                                   
                                                </div>
                                                <div class="card-footer bg-gray" style="font-size: 9px; color: blue;">

                                                        <table>
                                                            <td class="col-xl-4" style="padding:0 !important;">Biterate</td>
                                                            <td class="col-xl-2">15</td>
                                                            <td class="col-xl-2 text-danger">15</td>
                                                            <td class="col-xl-2">15</td>
                                                            <td class="col-xl-2">15</td>
                                                        </table>
                                                </div>


                                            </div>
                                                

                                        </div>

                                        <!-- ------------------------ -->
                                        <div class="col-xl-12 col-xs-12">
                                        <div class="card" style="padding: 0">

                                                <div class="card-body" style="font-size: 9px; color: blue;">
                                                    <p>Hgw total trafic [gb]</p><p class="float-right">5.7</p>
                                                </div>
                                                
                                        </div>
                                        </div>

                                        <!-- ------------------------ -->

                                        <div class="col-xl-12 col-xs-12">
                                            <div class="card" style="padding: 0">

                                                <div class="card-body" style="font-size: 9px; color: blue;">
                                                        <h6 class="card-title">HGw RSS</h6>

                                                         <table>
                                                            <td class="col-xl-4" style="padding:0 !important;">KPI name </td>
                                                            <td class="col-xl-2">Min</td>
                                                            <td class="col-xl-2">Avg</td>
                                                            <td class="col-xl-2">Max</td>
                                                            <td class="col-xl-2">Last</td>
                                                        </table>
                                                   
                                                </div>
                                                <div class="card-footer bg-gray" style="font-size: 9px; color: blue;">

                                                        <table>
                                                            <td class="col-xl-4" style="padding:0 !important;">Biterate</td>
                                                            <td class="col-xl-2">40</td>
                                                            <td class="col-xl-2 text-danger">-35</td>
                                                            <td class="col-xl-2">-35</td>
                                                            <td class="col-xl-2">-32</td>
                                                        </table>
                                                </div>


                                            </div>
                                                

                                        </div>

                                        <!-- ------------------------ -->

                                        
                                         
                                        <div class="col-xl-12 col-xs-12">
                                                <div class="card" style="padding: 0">

                                                    <div class="card-body" style="font-size: 9px; color: blue;">
                                                            <h6 class="card-title" style="font-size: 15px;" >HGw Interference Network RSS</h6>

                                                            <table>
                                                                <td class="col-xl-3" style="padding:0 !important;">KPI name </td>
                                                                <td class="col-xl-3">Min</td>
                                                                <td class="col-xl-3">Avg</td>
                                                                <td class="col-xl-3">Max</td>                                                          
                                                            </table>
                                                    
                                                    </div>
                                                    <div class="card-footer bg-gray" style="font-size: 9px; color: blue;">

                                                            <table>
                                                                <td class="col-xl-3" style="padding:0 !important;">Biterate</td>
                                                                <td class="col-xl-3">-42</td>
                                                                <td class="col-xl-3">-35</td>
                                                                <td class="col-xl-3">-40</td>                                                            
                                                            </table>
                                                    </div>
                                                
                                                </div>
                                        
                                        </div>

                                        

                                </div> <!--end row -->
                                
                            </div>
                            
                        </div>

                   </div>


<!-- nova dupla kolona -->


                   <div class="col-xl-5 col-xs-12">

                       <div class="row">

                           <div class="col-xl-6 col-xs-12">
                               <div class="row">

                                    <div class="col-xl-12 col-xs-12">
                                        <div class="card">
                                                <div class="card-body">

                                                    <h6>WiFi Connected Time</h6>
                                                    <div id="container9" class="solidGaugeRot" style="float: right; width: 200px; height: 200px; margin: 0 auto"></div>   

                                                </div>
                                        </div>
                                    </div>


                                    <div class="col-xl-12 col-xs-12">
                                        <div class="card">
                                                <div class="card-body">

                                                    <h6>HGw WiFi Usage</h6>
                                                    <div id="container10" class="solidGaugeRot" style="float: right; width: 200px; height: 200px; margin: 0 auto"></div>
                                                
                                                </div>
                                        </div>
                                    </div>


                                    <div class="col-xl-12 col-xs-12">
                                        <div class="card">
                                                <div class="card-body">
                                                    <h6>HGw Interference</h6>
                                                    <div id="container11" class="solidGaugeRot" style="float: right; width: 200px; height: 200px; margin: 0 auto"></div>

                                                </div>
                                        </div>
                                    </div>


                                    <div class="col-xl-12 col-xs-12">
                                        <div class="card">
                                                <div class="card-body">
                                                    <h6>HGw Interference Home</h6>
                                                    <div id="container12" class="solidGaugeRot" style="float: right; width: 200px; height: 200px; margin: 0 auto"></div>

                                                </div>
                                        </div>
                                    </div>

                               </div>
                                
                            </div>


                            <div class="col-xl-6 col-xs-12">
                            <div class="row">

                                    <div class="col-xl-12 col-xs-12">
                                        <div class="card card-pie">
                                                <div class="card-body">
                                                <h6>HGw Channel</h6>
                                                <div id="container13" class="solidGaugeRot" style="float: right; width: 200px; height: 200px; margin: 0 auto"></div>

                                                </div>
                                        </div>
                                    </div>


                                    <div class="col-xl-12 col-xs-12">
                                        <div class="card">
                                                <div class="card-body">
                                                    <h6>HGw Percent of time with sticky Clients</h6>
                                                    <div id="container14" class="solidGaugeRot" style="float: right; width: 200px; height: 200px; margin: 0 auto"></div>

                                                </div>
                                        </div>
                                    </div>


                                    <div class="col-xl-12 col-xs-12">
                                        <div class="card">
                                                <div class="card-body">

                                                    <h6>HGw Client's RSS status</h6>
                                                        <div id="container15" class="solidGaugeRot" style="float: right; width: 200px; height: 200px; margin: 0 auto"></div>

                                                </div>
                                        </div>
                                    </div>


                                    <div class="col-xl-12 col-xs-12">
                                        <div class="card">
                                                <div class="card-body">

                                                    <h6>HGw RSS status</h6>
                                                    <div id="container16" class="solidGaugeRot" style="float: right; width: 200px; height: 200px; margin: 0 auto"></div>
                                                      
                                                </div>
                                        </div>
                                    </div>
                                    </div>


                                
                            </div>

                       </div>

                   </div> 

                   <!-- end col-xl-5 -->


                   <div class="col-xl-2 col-xs-12">
                       <div class="row">

                           <div class="col-xl-12 col-xs-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>HGw Info</h6>
                                        <ul>
                                                            <li>WiFi enabled:<p> YES</p></li>
                                                            <li>HGw Standard:<p> 802.11b</p></li>
                                                            <li>IP address:<p> 192.168.1.1</p></li>
                                                            <li>MAC<p> B6-06-F6-C7-D5-04</p></li>
                                                            <li>Contract No<p> 12345678</p></li>
                                                            <li>Auto Channel enabled<p> YES</p></li>
                                                            <li>SSID:<p> IBIS-wifi</p></li>
                                                            <li>Band<p>2.4GHz</p></li>
                                                            <li>Security<p> WPA/WPA2-PSK</p></li>
                                                            <li>Hidden SSID:<p> No</p></li>
                                                            <li>Bandwith:<p> 22MHZ</p></li>
                                                            <li>Up time:<p> 22MHZ</p></li>
                                                            <li>Equipment:<p> ABC</p></li>
                                                            <li>Description:<p> modern</p></li>
                                                            <li>Description:<p> modern</p></li>
                                                            <li>CMISID:<p> BG-C-1-IBIS</p></li>
                                                            <li>Firmware:<p> 2.2.1004.76</p></li>
                                                            
                                                        </ul>
                                    </div>
                                </div>
                           </div>
                           

                       </div>

                   </div>

               </div>
                
                
        
            </div>

            
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="row">
                    <div class="col-xl-6 col-xs-12">
                        <div class="card" >
                            

                            <div class="card-body">
                            
                                <p class="card-text"><div id="container" class="graph-container"></div></p>
                                
                            </div>
                               

                        </div>

                    </div>
                    <div class="col-xl-6 col-xs-12">
                        <div class="card" >
                            


                            <div class="card-body">
                            
                                <p class="card-text"><div id="container2" class="graph-container"></div></p>
                                
                            </div>
                                

                        
                        </div>

                    </div>
                    
                   
                </div>
                <div class="row">

                    <div class="col-xl-6 col-xs-12">
                        <div class="card" >
                            <div class="card-body">
                            
                                <p class="card-text"><div id="container3" class="graph-container"></div></p>
                                
                            </div>
                               

                        
                        </div>

                    </div>
                    <div class="col-xl-6 col-xs-12">
                        <div class="card">

                            <div class="card-body">
                            
                                <p class="card-text"><div id="container4" class="graph-container"></div></p>
                                
                            </div>
                            

                        </div>
                    
                    </div>


                </div>
                <div class="row">

                    <div class="col-xl-6 col-xs-12">
                        <div class="card" >
                            <div class="card-body">
                            
                                <p class="card-text"><div id="container5" class="graph-container"></div></p>
                                
                            </div>
                               

                        
                        </div>

                    </div>

                      <div class="col-xl-6 col-xs-12">
                        <div class="card" >
                            <div class="card-body">
                            
                                <p class="card-text"><div id="container6" class="graph-container"></div></p>
                                
                            </div>
                               

                        
                        </div>

                    </div>
                
                
              </div>  
              <div class="row">

                    <div class="col-xl-6 col-xs-12">
                        <div class="card" >
                            <div class="card-body">
                            
                                <p class="card-text"><div id="container7" class="graph-container"></div></p>
                                
                            </div>
                               

                        
                        </div>

                    </div>

                      <div class="col-xl-6 col-xs-12">
                        <div class="card" >
                            <div class="card-body">
                            
                                <p class="card-text"><div id="container8" class="graph-container"></div></p>
                                
                            </div>
                               

                        
                        </div>

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
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-more.js"></script>
    <script src="https://code.highcharts.com/stock/highstock.js"></script>
    <script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="js/search.js"></script>
    <script src="js/splineChart.js"></script>
    <script src="js/styledChart.js"></script>
    <script src="js/interferenceNetwork.js"></script>
    <script src="js/hgwrss.js"></script>
    <script src="js/areasecond.js"></script>
    <script src="js/hgwBiteRate.js"></script>
    <script src="js/NoRetransmision.js"></script>
    <script src="js/NoOfClients.js"></script>
    <script src="js/pieWiFi.js"></script>
    <script src="js/hgwWifiUsage.js"></script>
    <script src="js/hgwInterference.js"></script>
    <script src="js/hgwInterferenceHome.js"></script>
    <script src="js/hgwClientRSS.js"></script>
    <script src="js/hgwChannel.js"></script>
    <script src="js/hgwPercent.js"></script>
    <script src="js/rssStatus.js"></script>
    <script src="js/searchContract.js"></script>




  </body>

  
</html>
