<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Blood system</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
    overflow-x:hidden !important;
}
::-webkit-scrollbar {
    width: 8px;
}

::-webkit-scrollbar-track {
    background: #f1f1f1;
}

::-webkit-scrollbar-thumb {
    background: #8c66ff;
}

::-webkit-scrollbar-thumb:hover {
    background: #ff8c66;
}
</style>

    <head>

    <body class="demo">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Welcome
                        <?php session_start();
                        if (isset($_SESSION["name"])) {
                            echo $_SESSION["name"];
                        } else {
                            echo "User";
                        } ?></a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Page 1-1</a></li>
                            <li><a href="#">Page 1-2</a></li>
                            <li><a href="#">Page 1-3</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Page 2</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-user"></span>
                            Sign Up</a></li>
                            <?php if (!isset($_SESSION["name"])) { ?><li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span>
                            Login</a></li> <?php 
                                        } else { ?>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>
                            Logout</a></li>
                            <?php 
                        } ?>
                </ul>
            </div>
        </nav>
        <div id="jssor_1" style="position:relative;margin:0 auto;top:-20px;left:0px;width:1300px;height:600px;overflow:hidden;visibility:hidden;">
            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
            </div>
            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:800px;overflow:hidden;">
                <div data-p="225.00">
                    <img data-u="image" src="img/i1.jpeg" />
                </div>
                <div data-p="225.00">
                    <img data-u="image" src="img/i2.jpg" />
                </div>
                <div data-p="225.00">
                    <img data-u="image" src="img/i8.jpg" />
                </div>
                <div data-p="225.00">
                    <img data-u="image" src="img/i4.jpg" />
                </div>
                <div data-p="225.00">
                    <img data-u="image" src="img/i3.jpg" />
                </div>
                <div data-p="225.00">
                    <img data-u="image" src="img/i5.jpg" />
                </div>
                <div data-p="225.00">
                    <img data-u="image" src="img/i6.jpg" />
                </div>
                <div data-p="225.00">
                    <img data-u="image" src="img/i9.jpg" />
                </div>
                <div data-p="225.00">
                    <img data-u="image" src="img/i10.jpg" />
                </div>
                <div data-p="225.00">
                    <img data-u="image" src="img/i7.jpg" />
                </div>
            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1"
                data-scale="0.5" data-scale-bottom="0.75">
                <div data-u="prototype" class="i" style="width:16px;height:16px;">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                    </svg>
                </div>
            </div>
            <!-- Arrow Navigator -->
            <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2"
                data-scale="0.75" data-scale-left="0.75">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                </svg>
            </div>
            <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;"
                data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                </svg>
            </div>
        </div>
        <div class="container">
            <div class="jumbotron">
                <h2>Search Blood</h2>
                <form class="example" action="action.php" method="POST">
                    <div class="form-group">
                        <form class="example" action="action_page.php">
                                <div class="form-group">
                                        <label class="control-label col-sm-2">Select Blood Group</label>
                                        <div class="col-sm-10">
                                            <select name="blood" class="form-control" id="blood1">
                                                <option>Select Blood Group</option>
                                                <option value="O-Positive">O-Positive</option>
                                                <option value="O-Negative">O-Negative</option>
                                                <option value="A-Positive">A-Positive</option>
                                                <option value="A-Negative">A-Negative</option>
                                                <option value="B-Positive">B-Positive</option>
                                                <option value="B-Negative">B-Negative</option>
                                                <option value="AB-Positive">AB-Positive</option>
                                                <option value="AB-Negative">AB-Negative</option>
                                            </select>
                                        </div>
                                    </div>

                        </form>
                    </div>
                </div>
                <div class="hide table-responsive">
                <table class="table table-hover table-bordered">
    <thead  class="thead-light">
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Address</th>
        <th>City</th>
        <th>Blood Group</th>
      </tr>
    </thead>
    <tbody id="records">
    </tbody>
  </table>
</div>
</div>
                    
                </div>
                </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Enter Credentials</h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="">
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="email">Email:</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email1" placeholder="Enter email"
                                            name="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="password">Password:</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password1" placeholder="Enter password"
                                            name="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="login btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="modal fade" id="myModal1" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Register Here..</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" action="action.php">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="name">Name:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="name" placeholder="Enter Name"
                                                    name="email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="email">Email:</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="email" placeholder="Enter Email"
                                                    name="email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="password">Password:</label>
                                            <div class="col-sm-10">
                                                <input type="password" name="password" class="form-control" id="password"
                                                    placeholder="Enter password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="cpassword">Confirm Password:</label>
                                            <div class="col-sm-10">
                                                <input type="password" name="cpassword" class="form-control" id="cpassword"
                                                    placeholder="Retype password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="phone">Phone Number:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="phone" placeholder="Enter phone Number"
                                                    name="phone">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="city">City:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="city" placeholder="Enter city Name"
                                                    name="city">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="address">Address:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="address" placeholder="Enter Address"
                                                    name="address">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2">Select Blood Group</label>
                                            <div class="col-sm-10">
                                                <select name="blood" class="form-control" id="blood">
                                                    <option>Select Blood Group</option>
                                                    <option value="O-Positive">O-Positive</option>
                                                    <option value="O-Negative">O-Negative</option>
                                                    <option value="A-Positive">A-Positive</option>
                                                    <option value="A-Negative">A-Negative</option>
                                                    <option value="B-Positive">B-Positive</option>
                                                    <option value="B-Negative">B-Negative</option>
                                                    <option value="AB-Positive">AB-Positive</option>
                                                    <option value="AB-Negative">AB-Negative</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="address">Address:</label>
                                            <label class="checkbox-inline gender"><input name="gender" type="radio"
                                                    value="male">Male</label>
                                            <label class="checkbox-inline gender"><input name="gender" type="radio"
                                                    value="female">Female</label>
                                        </div>
                                        <div class="form-group">
                                            <div class="text-center col-sm-10">
                                                <button class="register btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script>
                $(document).ready(function () {
                    <?php if (isset($_SESSION["name"])) { ?>
                    $('#blood1').change(function(){
                        var string;
                        $(".table-responsive").removeClass("hide");
                        string = "";
                        var searchdata= $(this).val();
                        var search = "s";
                        $.ajax({
                            url: "action.php",
                            type: "POST",
                            data: { search, searchdata },
                            success: function (data) {
                                console.log(data);
                                var result = $.parseJSON(data);
                                if(result[0] != 'No Data Found'){  
                                $.each( result, function( key, value ) {
                                  string += "<tr><td>"+value['name'] + "</td><td> " + value['email']+' </td><td> '+ value['phone']+'</td><td> '+ value['address']+'</td><td>  '+value['city']+'</td><td> '+ value['blood']+"</td></tr>";
                                 });
                                 $(".table-responsive").removeClass("hide");
                                 $("#records").html(string);
                                }else{
                                    alert("data not found");
                                }
                            }
                        });
                      });
                    <?php 
                } else { ?>
                        $('#blood1').change(function(){
                            alert("Register Your Details");
                        });
                    <?php 
                } ?>
                    $(".login").click(function (e) {
                        e.preventDefault();
                        var password = $("#password1").val();
                        var email = $("#email1").val();
                        var login = "d";
                        if (!email || !password) {
                            alert("All Fields are Required")
                            return false;
                        } else if (!/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/.test(email)) {
                            alert("Enter Valid Mail Id");
                            return false;
                        }
                        $.ajax({
                            url: "action.php",
                            type: "POST",
                            data: { login, password, email },
                            success: function (data) {
                                alert(data);
                                if(data == "login"){
                                    window.location.reload();
                                }
                            }
                        });
                    });
                    $(".register").click(function (e) {
                        e.preventDefault();
                        var email = $("#email").val();
                        var name = $("#name").val();
                        var gender = $("input[name='gender']:checked").val();
                        var password = $("#password").val();
                        var cpassword = $("#cpassword").val();
                        var phone = $("#phone").val();
                        var city = $("#city").val();
                        var blood = $("#blood").val();
                        var address = $("#address").val();
                        var register = "xc";
                        if (!email || !name || !phone || !address || !blood || !city || !email || !password) {
                            alert("All Fields are Required")
                            return false;
                        } else if (!/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/.test(email)) {
                            alert("Enter Valid Mail Id");
                            return false;
                        } else if (password != cpassword) {
                            alert("Password Not Match");
                            return false;
                        }
                        $.ajax({
                            url: "action.php",
                            type: "POST",
                            data: { register, name, blood, gender, city, address, phone, password, email },
                            success: function (data) {
                                alert(data);
                            }
                        });
                    });
                });
            </script>
            <script src="jssor.slider-26.8.0.min.js" type="text/javascript"></script>
            <script type="text/javascript">
                jssor_1_slider_init = function () {

                    var jssor_1_SlideoTransitions = [
                        [{ b: -1, d: 1, o: -0.7 }],
                        [{ b: 900, d: 2000, x: -379, e: { x: 7 } }],
                        [{ b: 900, d: 2000, x: -379, e: { x: 7 } }],
                        [{ b: -1, d: 1, o: -1, sX: 2, sY: 2 }, { b: 0, d: 900, x: -171, y: -341, o: 1, sX: -2, sY: -2, e: { x: 3, y: 3, sX: 3, sY: 3 } }, { b: 900, d: 1600, x: -283, o: -1, e: { x: 16 } }]
                    ];

                    var jssor_1_options = {
                        $AutoPlay: 1,
                        $SlideDuration: 800,
                        $SlideEasing: $Jease$.$OutQuint,
                        $Cols: 1,
                        $Align: 0,
                        $CaptionSliderOptions: {
                            $Class: $JssorCaptionSlideo$,
                            $Transitions: jssor_1_SlideoTransitions
                        },
                        $ArrowNavigatorOptions: {
                            $Class: $JssorArrowNavigator$
                        },
                        $BulletNavigatorOptions: {
                            $Class: $JssorBulletNavigator$
                        }
                    };

                    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                    /*#region responsive code begin*/

                    var MAX_WIDTH = 3000;

                    function ScaleSlider() {
                        var containerElement = jssor_1_slider.$Elmt.parentNode;
                        var containerWidth = containerElement.clientWidth;

                        if (containerWidth) {

                            var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                            jssor_1_slider.$ScaleWidth(expectedWidth);
                        }
                        else {
                            window.setTimeout(ScaleSlider, 30);
                        }
                    }

                    ScaleSlider();

                    $Jssor$.$AddEvent(window, "load", ScaleSlider);
                    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                    /*#endregion responsive code end*/
                };
            </script>
            <style>
                .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        .jssorb032 {position:absolute;}
        .jssorb032 .i {position:absolute;cursor:pointer;}
        .jssorb032 .i .b {fill:#fff;fill-opacity:0.7;stroke:#000;stroke-width:1200;stroke-miterlimit:10;stroke-opacity:0.25;}
        .jssorb032 .i:hover .b {fill:#000;fill-opacity:.6;stroke:#fff;stroke-opacity:.35;}
        .jssorb032 .iav .b {fill:#000;fill-opacity:1;stroke:#fff;stroke-opacity:.35;}
        .jssorb032 .i.idn {opacity:.3;}

        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
	</style>
            <script type="text/javascript">jssor_1_slider_init();</script>
    </body>

</html>