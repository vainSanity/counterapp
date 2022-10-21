
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Counter 5 Report Tool</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Counter 5 Report Tool</h1> 
</div>

<div class="container-fluid mt-2">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#managevendors"><i class="fa fa-user-o" style="font-size:20px"></i>&nbsp;Manage Vendors</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#fetchreports"><i class="fa fa-download" style="font-size:20px"></i>&nbsp;Fetch Reports</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#fetchSR"><i class="fa fa-download" style="font-size:20px"></i>&nbsp;<i class="fa fa-star" style="font-size:10px"></i>&nbsp;Fetch Special Reports</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#importreport"><i class="fa fa-file-o" style="font-size:20px"></i>&nbsp;<i class="fa fa-arrow-left" style="font-size:10px"></i>&nbsp;Import Report</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#costs"><i class="fa fa-money" style="font-size:20px"></i>&nbsp;Costs</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#search"><i class="fa fa-search" style="font-size:20px"></i>&nbsp;Search</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#visual"><i class="fa fa-bar-chart" style="font-size:20px"></i>&nbsp;Visual</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#settings"><i class="fa fa-cogs" style="font-size:20px"></i>&nbsp;Settings</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="managevendors" class="container tab-pane active"><br>
      <h3>Manage Vendors Tab</h3>
      <div class="row shadow">
        <div class="col-sm-6 border" style="padding:20px;">
          <h5>Select Vendor</h5>
          <div class="container">            
            <table class="table table-responsive table-hover table-borderless">
              <thead>
                <tr>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Test123</td>
                </tr>
                <tr>
                  <td>Vendor2</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-sm-6 border" style="padding: 20px;">
          <h5>Edit Vendor</h5>
          <div class="container">
            <form action="/">
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="" name="name">
              </div>
              <div class="form-group">
                <label for="url">Base URL:</label>
                <input type="text" class="form-control" id="url" placeholder="" name="baseUrl">
              </div>
              <div class="form-group">
                <label for="custID">Customer ID:</label>
                <input type="text" class="form-control" id="custID" placeholder="" name="custoID">
              </div>
              <div class="form-group">
                <label for="reqID">Requestor ID:</label>
                <input type="text" class="form-control" id="reqID" placeholder="" name="requeID">
              </div>
              <div class="form-group">
                <label for="api">API Key:</label>
                <input type="text" class="form-control" id="api" placeholder="" name="apiKey">
              </div>
              <div class="form-group">
                <label for="pForm">Platform:</label>
                <input type="text" class="form-control" id="pform" placeholder="" name="plForm">
              </div>
              <div class="form-group form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="remember">Non-SUSHI Vendor
                </label>&nbsp;&nbsp;&nbsp;<i class="fa fa-question-circle"></i>
              </div>
              <div class="form-group">
                <label for="comment">Description:</label>
                <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
              </div>
              <div class="form-group">
                <label for="comment">Third Party Provider:</label>
                <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
              </div>
              <button type="submit" class="btn btn-light btn-outline-dark" style="font-size:15px"><i class="fa fa-save"></i>&nbsp;Save Changes</button>
              <button type="reset" class="btn btn-light btn-outline-dark" style="font-size:15px"><i class="fa fa-undo"></i>&nbsp;Undo Changes</button>
              <button type="button" class="btn btn-light btn-outline-dark" style="font-size:15px"><i class="fa fa-user"></i>&nbsp;<i class="fa fa-minus" style="font-size:9px;"></i>&nbsp;Remove Vendor</button>
            </form>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-6">
          <div class="container">
          <button type="button" class="btn btn-light btn-outline-dark" style="font-size:15px"><i class="fa fa-user-plus"></i>&nbsp;Add New Vendor</button>
          <button type="button" class="btn btn-light btn-outline-dark" style="font-size:15px"><i class="fa fa-user"></i><i class="fa fa-arrow-down" style="font-size:9px;"></i>&nbsp;Import Vendors</button>
          <button type="button" class="btn btn-light btn-outline-dark" style="font-size:15px"><i class="fa fa-user"></i><i class="fa fa-arrow-up" style="font-size:9px;"></i>&nbsp;Export Vendors</button>
        </div>
        </div>
      </div>
    </div>
    
    <div id="fetchreports" class="container tab-pane fade"><br>
      <h5 class="text-center">Fetch Reports</h5>
        <div class="container border shadow" style="padding:20px;">
            <div class="row">
              <div class="col-sm-6">
              <form action="/" class="form-inline">
                <div class="form-group mx-auto">
                  <label for="year">Year</label>&nbsp;
                  <input type="date" class="form-control" id="year" name="year">
                </div>
              </form>
              </div>
              <div class="col-sm-6 text-center">
              <button type="button" class="btn btn-light btn-outline-dark" style="font-size:15px">Fetch All Reports</button>
              </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container">
            <h5 class="text-center">Advanced Fetch Reports</h5>
            <div class="row">
                <div class="col border shadow" style="padding:25px;">
                  <h6>Select Vendors</h6>
                  <div class="container text-center">
                      <button type="button" class="btn btn-light btn-outline-dark" style="font-size:15px">Select All</button>
                      <button type="button" class="btn btn-light btn-outline-dark" style="font-size:15px">Deselect All</button>
                  </div>
                  <div class="container">            
                      <form action="/">
                        <div class="form-check">
                          <label class="form-check-label" for="check1">
                            <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">Test123
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label" for="check2">
                            <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">Vendor2
                          </label>
                        </div>
                      </form>
                  </div>
                </div>
                <div class="col border shadow" style="padding:15px;">
                  <h6>Select Report Type</h6>
                  <div class="container text-center">
                      <button type="button" class="btn btn-light btn-outline-dark" style="font-size:15px">Select All</button>
                      <button type="button" class="btn btn-light btn-outline-dark" style="font-size:15px">Deselect All</button>
                      <button type="button" class="btn btn-light btn-outline-dark" style="font-size:15px"><i class="fa fa-question-circle"></i></button>
                  </div>
                  <div class="container">            
                      <form action="/">
                        <div class="form-check">
                          <label class="form-check-label" for="check1">
                            <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">DR
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label" for="check2">
                            <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">DR_D1
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label" for="check3">
                            <input type="checkbox" class="form-check-input" id="check3" name="option3" value="something">DR_D2
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label" for="check4">
                            <input type="checkbox" class="form-check-input" id="check4" name="option4" value="something">IR
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label" for="check5">
                            <input type="checkbox" class="form-check-input" id="check5" name="option5" value="something">IR_A1
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label" for="check6">
                            <input type="checkbox" class="form-check-input" id="check6" name="option6" value="something">IR_M1
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label" for="check7">
                            <input type="checkbox" class="form-check-input" id="check7" name="option7" value="something">PR
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label" for="check8">
                            <input type="checkbox" class="form-check-input" id="check8" name="option8" value="something">PR_P1
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label" for="check9">
                            <input type="checkbox" class="form-check-input" id="check9" name="option9" value="something">TR
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label" for="check10">
                            <input type="checkbox" class="form-check-input" id="check10" name="option10" value="something">TR_B1
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label" for="check11">
                            <input type="checkbox" class="form-check-input" id="check11" name="option11" value="something">TR_B2
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label" for="check12">
                            <input type="checkbox" class="form-check-input" id="check12" name="option12" value="something">TR_B3
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label" for="check13">
                            <input type="checkbox" class="form-check-input" id="check13" name="option13" value="something">TR_J1
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label" for="check14">
                            <input type="checkbox" class="form-check-input" id="check14" name="option14" value="something">TR_J2
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label" for="check15">
                            <input type="checkbox" class="form-check-input" id="check15" name="option15" value="something">TR_J3
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label" for="check16">
                            <input type="checkbox" class="form-check-input" id="check16" name="option16" value="something">TR_J4
                          </label>
                        </div>
                      </form>
                  </div>
                </div>
                <div class="col border shadow" style="padding:15px;">
                  <h6>Date Range</h6>
                  <form action="/" class="form-inline">
                    <div class="form-group mx-auto">
                      <label for="beginDate">Begin Date</label>&nbsp;
                      <input type="date" class="form-control" id="beginDate" name="bDate">
                    </div>
                  </form>
                  <br>
                  <br>
                  <br>
                  <form action="/" class="form-inline">
                    <div class="form-group mx-auto">
                      <label for="endDate">End Date</label>&nbsp;
                      <input type="date" class="form-control" id="endDate" name="eDate">
                    </div>
                  </form>
                  <br>
                  <div class="container text-center" style="margin-top:50px;">
                      <button type="button" class="btn btn-light btn-outline-dark" style="font-size:15px">Fetch Selected Reports</button>
                  </div>
                </div>
            </div>
        </div>
        <br>
        <div class="d-flex justify-content-end">
            <p>Note: Yearly reports cover all available data for one calendar year. Only yearly reports are added to the search database.</p>
        </div>
    </div>
    
    
    <div id="fetchSR" class="container tab-pane fade"><br>
        <div class="row">
          <div class="col border shadow" style="padding:25px;">
            <h6>Select Vendors</h6>
                <div class="container text-center">
                    <button type="button" class="btn btn-light btn-outline-dark" style="font-size:15px">Select All</button>
                    <button type="button" class="btn btn-light btn-outline-dark" style="font-size:15px">Deselect All</button>
                </div>
                <div class="container">            
                  <form action="/">
                      <div class="form-check">
                        <label class="form-check-label" for="check1">
                          <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">Test123
                        </label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label" for="check2">
                          <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">Vendor2
                        </label>
                      </div>
                  </form>
                </div>
          </div>

          <div class="col border shadow" style="padding:25px;">
            <h6>Select Report Type</h6>
              <form action="/">
                <div class="form-check d-flex justify-content-center" style="margin-top:50px;">
                  <label class="form-check-label" for="radio1">
                    <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>PR
                  </label>
                </div>
                <div class="form-check d-flex justify-content-center" style="margin-top:30px;">
                  <label class="form-check-label" for="radio2">
                    <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">DR
                  </label>
                </div>
                <div class="form-check d-flex justify-content-center" style="margin-top:30px;">
                  <label class="form-check-label" for="radio3">
                    <input type="radio" class="form-check-input" id="radio3" name="optradio" value="option3">TR
                  </label>
                </div>
                <div class="form-check d-flex justify-content-center" style="margin-top:30px;">
                  <label class="form-check-label" for="radio4">
                    <input type="radio" class="form-check-input" id="radio4" name="optradio" value="option4">IR
                  </label>
                </div>
              </form>    
          </div>
          
          <div class="col border shadow" style="padding:25px;">
            <div class="container d-flex">
              <h6>Options</h6>
              <button type="button" class="btn btn-light btn-outline-dark ml-auto" style="font-size:12px"><i class="fa fa-question-circle"></i></button>
            </div>
            <div class="row border" style="margin-top:10px;">
              <div class="col-sm-6">
                  <h6>Show</h6>
                  <div class="container">            
                    <form action="/">
                        <div class="form-check">
                          <label class="form-check-label" for="check1">
                            <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">Data_Type
                          </label>
                        </div>
                        <br>
                        <div class="form-check">
                          <label class="form-check-label" for="check2">
                            <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">Access_Method
                          </label>
                        </div>
                        <br>
                        <div class="form-check">
                          <label class="form-check-label" for="check3">
                            <input type="checkbox" class="form-check-input" id="check3" name="option3" value="something">Metric_Type
                          </label>
                        </div>
                        <br>
                        <div class="form-check">
                          <label class="form-check-label" for="check4">
                            <input type="checkbox" class="form-check-input" id="check4" name="option4" value="something">Exclude_Monthly_Details
                          </label>
                        </div>
                    </form>
                </div>
              </div>
              <div class="col-sm-6">
                  <h6>Filters</h6>
                  <div class="container">
                    <form action="/">
                      <div class="form-group">
                        <select class="form-control form-control-sm" id="sel1" name="sellist1">
                          <option>all</option>
                          <option>one</option>
                          <option>two</option>
                          <option>none</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <select class="form-control form-control-sm" id="sel2" name="sellist2">
                          <option>all</option>
                          <option>one</option>
                          <option>two</option>
                          <option>none</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <select class="form-control form-control-sm" id="sel3" name="sellist3">
                          <option>all</option>
                          <option>one</option>
                          <option>two</option>
                          <option>none</option>
                        </select>
                      </div>
                    </form>
                  </div>
              </div>
            </div>
            <div class="container d-flex" style="margin-top:10px;">
              <h6>Date Range</h6>
              <button type="button" class="btn btn-light btn-outline-dark ml-auto" style="font-size:12px"><i class="fa fa-question-circle"></i></button>
            </div>
                <div class="row border" style="margin-top:10px;padding:5px;">
                  <div class="col-sm-6">
                      <p>Begin Date</p>
                      <p>End Date</p>
                  </div>
                  <div class="col-sm-6" style="padding-right:10px;">
                      <form action="/" class="form-inline">
                        <div class="form-group">
                          <input type="date" class="form-control" id="beginDate" name="bDate">
                        </div>
                      </form>
                      <form action="/" class="form-inline">
                        <div class="form-group">
                          <input type="date" class="form-control" id="endDate" name="eDate">
                        </div>
                      </form>
                  </div>
                </div>
            <div class="container d-flex" style="margin-top:10px;">
              <h6>Report(s) will be save to:</h6>
              <button type="button" class="btn btn-light btn-outline-dark ml-auto" style="font-size:12px"><i class="fa fa-question-circle"></i></button>
            </div>
            <div class="container-fluid" style="margin-top:10px;">
              <form action="/">
                <div class="form-group">
                  <input type="file" class="form-control-file border" name="file">
                  <!--<input type="file" class="form-control-file border" id="validatedCustomFile" name="file">
                  <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                  <label class="btn btn-light btn-outline-dark">
                      <span style="border:3px;">Change</span> <input type="file" style="display: none;" required>
                  </label>-->
                </div>
              </form>
            </div>
          <div class="container-fluid border text-center" style="padding:50px;">
            <button type="button" class="btn btn-light btn-outline-dark mx-auto" style="font-size:15px">Fetch Special Report</button>
          </div>
          </div>
        </div>
        <br>
        <div class="d-flex justify-content-end">
            <p>Note: Special reports are not added to the search database.</p>
        </div>
    </div>
    
    <div id="importreport" class="container tab-pane fade"><br>
      <h3>Import Report Tab</h3>
      <p>Import Report</p>
    </div>
    
    <div id="importreport" class="container tab-pane fade"><br>
      <h3>Costs Tab</h3>
      <p>Costs</p>
    </div>
    
    <div id="search" class="container tab-pane fade"><br>
      <h3>Search Tab</h3>
      <p>Search</p>
    </div>
    
    <div id="visual" class="container tab-pane fade"><br>
      <h3>Visual Tab</h3>
      <p>Visual</p>
    </div>
    
    <div id="settings" class="container tab-pane fade"><br>
      <h3>Settings Tab</h3>
      <p>Settings</p>
    </div>
  </div>
</div>
<div class="container-fluid" style="margin-bottom:10px;">
  <div class="row">
      <div class="col-sm-6">
      <button type="button" class="btn btn-light btn-outline-dark btn-sm" style="font-size:10px"><i class="fa fa-question-circle"></i>&nbsp;Help</button>
      </div>
  </div>
</div>

</body>
</html>