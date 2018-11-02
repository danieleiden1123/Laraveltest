<link rel="stylesheet" href="{{asset('backend/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}"/>
<section class="content-header">
    <h1>Project</h1>
    <ol class="breadcrumb">
        <li><a href="javascript:void(0);"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Project</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Project Create</h3>
                </div>
                <form role="form" id="frmProject" action="api/project" method="post">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="project_name">Project Name</label>
                                    <input type="text" class="form-control" id="project_name" name="project_name"
                                           placeholder="Project Name" required/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="start_date">Start Date</label>
                                    <input type="text" class="form-control datepicker" id="start_date" name="start_date"
                                           placeholder="Start Date" required/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="end_date">End date</label>
                                    <input type="text" class="form-control datepicker" id="end_date" name="end_date"
                                           name="end_date" placeholder="End date" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <textarea class="form-control" rows="5" id="description" name="description"
                                              placeholder="Description" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="priority">Priority</label>
                                    <select class="form-control" id="priority" name="priority" required>
                                        <option value="">Select Priority</option>
                                        <option value="1">High</option>
                                        <option value="2">Medium</option>
                                        <option value="3">Low</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="skill">Skill </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="skill[]" value="1">PHP</label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="skill[]" value="2">Angular</label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="skill[]" value="3">React</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status">Status </label>
                                    <label class="radio-inline"><input type="radio" name="status" checked>Active</label>
                                    <label class="radio-inline"><input type="radio" name="status">Deactive</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="alert alert-danger"></div>
                                    <div class="alert alert-success"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" id="btnSubmit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="{{asset('backend/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script>
    $(function () {
        $('.datepicker').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd'
        })
    });
</script>
<script src="{{asset('backend/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('backend/js/project.js')}}"></script>