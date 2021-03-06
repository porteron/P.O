
<div class="container" ng-controller="registerController as rc">
    <div class="wrapper">
        <form class="form-signin" name="regForm">
            <h2 class="form-signin-heading">Sign up</h2>
            <input ng-model="rc.signup.username" type="text" class="form-control form-group" name="username" id="username" placeholder="username" required ngMaxlength="20"/>
            <input ng-model="rc.signup.email"  type="email" class="form-control form-group" name="email" id="email" placeholder="Email Address" required ngMaxlength="55"/>
            <input ng-model="rc.signup.password"  type="password" class="form-control form-group" name="password" id="password" placeholder="Password" required ngMaxlength='32'/>
            <input ng-model="rc.signup.password2"  type="password" class="form-control form-group" name="password2" id="password2" placeholder="Retype Password" required ngMaxlength="32" />
            <label class="checkbox">
                <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
            </label>
        </form>
         <span class="error" ng-show="regForm.input.$error.required">
        Required!</span>
      <span class="error" ng-show="regForm.input.$error.email">
        Not valid email!</span>
        <button ng-click="rc.sendData(rc.signup)" class="btn btn-lg btn-primary btn-block" id="create_user">Login</button>
    </div>
    <br>
    <p>Already a member? Sign in <a href="login.php">here</a></p>
    <div id="#error-message"></div>
</div>
<footer>
    <div class="row footer">
        <img src="Images/hipaa_blue.png" height="100px" width="200px">
    </div>
</footer>