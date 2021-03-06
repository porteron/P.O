<div class="container login-background" ng-controller="clientSetupController as csc">
    <div class="col-xs-12 col-sm-9 ">
        <div class="col-xs-12 contact-inner">
            <h2>Create new client</h2>
            <hr>
            <form>
                <h5>First Name</h5>
                <input ng-model="csc.first_name" id="first_name" class="form-control" placeholder="client first name" maxlength="30"><br>
                <h5>Last Name</h5>
                <input  ng-model="csc.last_name" id="last_name" class="form-control" placeholder="client last name" maxlength="40"><br>
                <h5>Notes</h5>
                <textarea  ng-model="csc.notes" class="form-control" id="notes" placeholder="Notes" rows="8" maxlength="1000"></textarea>
            </form>
            <div class="row">
                <div class = "col-xs-12 next" >
                  <a href="#select_form"><button ng-click="csc.sessionName();" id="next" class="btn btn-lg btn-danger glyphicon glyphicon-chevron-right"></button></a>
                </div>
            </div>
        </div>
    </div>
</div>
