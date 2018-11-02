<div class="login-box">
    <div class="login-logo">
        <a href="javascript:void(0);">{{env('APP_NAME')}}</a>
    </div>
    <div class="login-box-body">
        <form action="{{url('api/login')}}" id="frmLogin" method="post">
            {{ csrf_field() }}
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="Email" id="email" name="email" autofocus
                       required/>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password" id="password" name="password"
                       required/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-4 col-xs-offset-8">
                    <button type="submit" id="btnSubmit" class="btn btn-primary btn-block btn-flat"
                            data-loading-text="<i class='fa fa-spinner fa-spin '></i> loading">Sign In
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 m-t-20">
                    <div class="alert alert-danger"></div>
                    <div class="alert alert-success"></div>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="{{asset('backend/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('backend/js/login.js')}}"></script>