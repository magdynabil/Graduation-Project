<?php
function sign_up(){
    if(isset($_SESSION['user_id'])){
        echo'<div class="container text-center"><div class="alert alert-warning" role="alert">you are already connected! s' .$_SESSION["user_name"].'</div></div>';

    }
    else{
        echo ' <form action="include/sin_up_code.php"method="post"id="registor" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="input1" class="col-sm-2 col-form-label">user name <i class="fas fa-user"></i></label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="user_name"name="user_name"placeholder="user name">
            </div>
        </div>
        <div class="form-group row">
            <label for="input2" class="col-sm-2 col-form-label">email <i class="fas fa-envelope"></i></label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="email"name="email" placeholder="email">
            </div>
        </div>
        <div class="form-group row">
            <label for="input3" class="col-sm-2 col-form-label">Password <i class="fas fa-unlock-alt"></i></label>
            <div class="col-sm-6">
                <input type="password" class="form-control"  id="Password"name="Password" placeholder="Password">
            </div>
        </div>
        <div class="form-group row">
            <label for="input4" class="col-sm-2 col-form-label">confirm password<i class="fas fa-unlock-alt"></i></label>
            <div class="col-sm-6">
                <input type="password" class="form-control" id="config_password"name="config_password" placeholder="Password">
            </div>
        </div>
        <div class="form-group row">
            <label for="input5" class="col-sm-2 col-form-label">gender <i class="fas fa-venus-mars"></i></label>
            <div class="col-sm-3">
                <select class="form-control" id="gender"name="gender">
                    <option value="male" >male</option>
                    <option value="female">femail</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="input6"  class="col-sm-2 col-form-label">picture <i class="fas fa-portrait"></i></label>
            <div class="col-sm-10">
                <input type="file" class="form-control-file" id="picture"name="picture">
            </div>
        </div>
        <div class="form-group row">
            <label for="input7"  class="col-sm-2 col-form-label">about <i class="fas fa-user-edit"></i></label>
            <div class="col-sm-5">
                <textarea class="form-control" id="about"name="about" rows="4"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="input7" class="col-sm-2 col-form-label">facebook <i class="fab fa-facebook-square"></i></label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="facebook"name="facebook" placeholder="facebook">
            </div>
        </div>
        <div class="form-group row">
            <label for="input8" class="col-sm-2 col-form-label">instgeram <i class="fab fa-instagram"></i></label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="instgeram"name="instgeram" placeholder="instgram">
            </div>
        </div>
        <div class="form-group row">
            <label for="input9" class="col-sm-2 col-form-label">twitter <i class="fab fa-twitter-square"></i></label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="twitter"name="twitter" placeholder="twitter">
            </div>
        </div>
        <div class="form-group row">
            <label for="input5" class="col-sm-2 col-form-label">safety question:1<i class="fas fa-question"></i></label>
            <div class="col-sm-6">
                <select class="form-control" id="security_question_1"name="security_question_1">
                    <option value="What was the name of your first stuffed animal?" >What was the name of your first stuffed animal?</option>
                    <option value="What is the middle name of your youngest child?">What is the middle name of your youngest child?</option>
                    <option value="What is your oldest sibling is middle name?"> "What is your oldest sibling is middle name ?" </option>
                    <option value="What school did you attend for sixth grade ?">What school did you attend for sixth grade ? </option>
                    <option value="What is your oldest cousin is first and last name ? "> What is your oldest cousin is first and last name ? </option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="input1" class="col-sm-2 col-form-label">answer <i class="fas fa-user"></i></label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="answer_1"name="answer_1"placeholder=" first safety question">
            </div>
        </div>
        <div class="form-group row">
            <label for="input5" class="col-sm-2 col-form-label">safety question:2<i class="fas fa-question"></i></label>
            <div class="col-sm-6">
                <select class="form-control" id="security_question_2"name="security_question_2">
                    <option value="What was your childhood nickname?">What was your childhood nickname?</option>
                    <option value="In what city did you meet your spouse/significant other?" >In what city did you meet your spouse/significant other?</option>
                    <option value="What is the name of your favorite childhood friend?">What is the name of your favorite childhood friend?</option>
                    <option value="What street did you live on in third grade?">What street did you live on in third grade?</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="input1" class="col-sm-2 col-form-label">answer <i class="fas fa-user"></i></label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="answer_2"name="answer_2"placeholder=" second safety question">
            </div>
        </div>
        <div class="form-group row ">
            <div class="col-sm-12 text-center" id="regist"></div>
            <div class="col-sm-12 ">
                <button type="submit"name="submit" class="btn btn-lg btn-block">Sign in</button>
            </div>
        </div>
    </form>';
    }
}
function login_area(){
    if(isset($_SESSION['user_id'])){
        echo '
        <div class="container ">
    <div class="rigstration">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
             <h3 class="text-center"style="margin-top:20px">welcome <span class="font-weight-bold text-center text-warning">'.ucfirst( $_SESSION['user_name']).'<span></h3>
               <div class="d-flex justify-content-end social_icon">
                    <span><a href="'.$_SESSION['facebook'].'" style="color: #FFB11F;"><i class="fab fa-facebook-square"></i></a></span>
                    <span><a href="'.$_SESSION['instgram'].'" style="color: #FFB11F;"><i class="fab fa-instagram"></i></a></span>
                    <span><a href="'.$_SESSION['twitter'].'" style="color: #FFB11F;"><i class="fab fa-twitter-square"></i></a></span>
                </div>
               <img class="" src="'.$_SESSION['avatar'].'" width="200px"height="200px" style="border-radius: 100px;margin-left: 80px">
               <p class="text-light text-center">'.substr($_SESSION['about'],0,50).' .....  </p>
               <p class="font-weight-bold text-center text-warning">'.$_SESSION['email'].' </p>
               
                <form>
                  <div class="form-group">
                        <a style="margin-bottom: -10px;" href="include/logout.php?id='.$_SESSION['user_id'].'" class="btn float-right login_btn">Log out</a>
                    </div>
                    <div class="form-group">
                        <a  style="width: auto" href="forget_password.php"  class="btn float-left login_btn">change Password</a>
                    </div>
               </div>
               <div class="card-footer " style="margin: auto">
               
               </div>
               </div>
               </div>
               </div>
        ';


    }
    else{
    echo '<div class="container ">
    <div class="rigstration">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center font-weight-bold">Sign In</h3>
                <div class="d-flex justify-content-end social_icon">
                </div>
            </div>
            <div class="card-body">
                <form method="post" action="include/login.php" id="login">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text"  name="user" id="user" class="form-control" placeholder="username">

                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="pass"id="pass" class="form-control" placeholder="password">
                    </div>
                    <div class="row align-items-center " id="log">
                    </div>
                    <div class="form-group">
                        <button  name="Log_in" id="log_in" class="btn float-right login_btn">Log in</button>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center links">
                    Don\'t have an account?<a href="sign_up.php">Sign Up</a>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="forget_password.php" style="color:#FFC312;">Forgot your password?</a>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
';
    }
}


    ?>