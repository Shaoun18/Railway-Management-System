 <?php require_once("Header.php");?>
    <head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>

    <br/>
    <br/>
    <form id="signupForm"  method = "POST" action="signup_core.php">
        <center>
           Enter your Country :
           <select>
                <option>Select your Country</option>
                <option selected = "selected">Bangladesh</option>
                <option>India</option>
                <option>United Kingdom</option>
                <option>United Staties</option>
                <option>China</option>
            </select>   <br/> <br/>
            Enter your Source Station :
            <select>
                <optgroup label = "Bangladesh Division">
                    <option value =""> Dhaka</option>
                    <option value =""> Chitagonj</option>
                    <option value =""> sylhet</option>
                    <option value =""> Joshor</option>
                    <option value =""> Rajshai</option>
                </optgroup>
                <optgroup label = "India Division">
                    <option value =""> Kolkata</option>
                    <option value =""> New Delhi</option>
                    <option value =""> Goa</option>
                    <option value =""> Tamil Nadu</option>
                    <option value =""> panjab</option>
                </optgroup>
                <optgroup label = "United Kingdom Division">
                    <option value =""> London</option>
                    <option value =""> Edinburgh</option>
                    <option value =""> Bath</option>
                    <option value =""> Glasgow</option>
                </optgroup>
                <optgroup label = "United States Division">
                    <option value =""> Califonia</option>
                    <option value =""> Florida</option>
                    <option value =""> Texas</option>
                    <option value =""> Hawali</option>
                    <option value =""> New York</option>
                </optgroup>
                <optgroup label = "China Division">
                    <option value =""> Hainan</option>
                    <option value =""> Zhejiang</option>
                    <option value =""> Jiangsu</option>
                    <option value =""> Sichuan</option>
                    <option value =""> Henan</option>
                </optgroup>
            </select>  <br/>

            <br/>
            Enter your Destination Station :
            <select>
                <optgroup label = "Bangladesh Division">
                    <option value =""> Dhaka</option>
                    <option value =""> Chitagonj</option>
                    <option value =""> sylhet</option>
                    <option value =""> Joshor</option>
                    <option value =""> Rajshai</option>
                </optgroup>
                <optgroup label = "India Division">
                    <option value =""> Kolkata</option>
                    <option value =""> New Delhi</option>
                    <option value =""> Goa</option>
                    <option value =""> Tamil Nadu</option>
                    <option value =""> panjab</option>
                </optgroup>
                <optgroup label = "United Kingdom Division">
                    <option value =""> London</option>
                    <option value =""> Edinburgh</option>
                    <option value =""> Bath</option>
                    <option value =""> Glasgow</option>
                </optgroup>
                <optgroup label = "United States Division">
                    <option value =""> Califonia</option>
                    <option value =""> Florida</option>
                    <option value =""> Texas</option>
                    <option value =""> Hawali</option>
                    <option value =""> New York</option>
                </optgroup>
                <optgroup label = "China Division">
                    <option value =""> Hainan</option>
                    <option value =""> Zhejiang</option>
                    <option value =""> Jiangsu</option>
                    <option value =""> Sichuan</option>
                    <option value =""> Henan</option>
                </optgroup>
            </select>  <br/> <br/>

            How many passenger ticket  :
            <select>
                <option>Select your Passenger</option>
                <option selected = "selected"> Adult </option>
                <option> 1 </option>
                <option> 2 </option>
                <option> 3 </option>
                <option> 4 </option>
            </select>  <br/>

            <div class="container">
                <div class="row">
                    <h6></h6>
                </div>
                <div class="row">
                    <div class='col-sm-5'>
                        <form>
                            <div class="form-group">
                                <div class='input-group date' id='datepicker'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
		                        <span class="glyphicon glyphicon-calendar"></span>
		                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
            <script >
                $(function () {
                    $('#datepicker').datepicker({
                        format: "dd/mm/yyyy",
                        autoclose: true,
                        todayHighlight: true,
                        showOtherMonths: true,
                        selectOtherMonths: true,
                        autoclose: true,
                        changeMonth: true,
                        changeYear: true,
                        orientation: "button"
                    });
                });
            </script>

            <br/>
            <input type="submit" name="submitsignup" value="submit">
        </center>
    </form>
    <br/>
    <br/>

    <?php require_once("Footer.php");?>