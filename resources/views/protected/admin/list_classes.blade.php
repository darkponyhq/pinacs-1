@extends('layouts.main')

@section('title', 'List Users')

@section('content')


    <h2>Levels and Classes</h2>
    <div class="row flex">
        <div class="col-xs-10">
            <h4>Levels</h4>
        </div>
        <div class="col-xs-2 text-right">
          <div class="btn-group">
            <a aria-expanded="false" href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            Add Level
            <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
            <li><a href="/admin/add/teacher">Teacher</a></li>
            <li><a href="/admin/add/student">Student</a></li>
            <li><a href="/admin/add/parent">Parent</a></li>
            </ul>
          </div>
        </div>
    </div>
    <!-- levels table -->
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
              <td class="list_user_filters text-right" colspan="9">
                <!-- filter role -->
                <div class="btn-group">
                  <a aria-expanded="false" href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  Role
                  <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="/admin/profiles">All <i class="fa fa-check" aria-hidden="true"></i></a></li>
                    <li><a href="/admin/profiles/admins">Admins</a></li>
                    <li><a href="/admin/profiles/teachers">Teachers</a></li>
                    <li><a href="/admin/profiles/students">Students</a></li>
                    <li><a href="/admin/profiles/parents">Parents</a></li>
                  </ul>
                </div>
                <!-- filter role end-->
                <!-- filter level -->
                <div class="btn-group">
                  <a aria-expanded="false" href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  Level
                  <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="/admin/profiles">All <i class="fa fa-check" aria-hidden="true"></i></a></li>
                    <li><a href="/admin/profiles/admins">Pro Junior</a></li>
                    <li><a href="/admin/profiles/teachers">Junior</a></li>
                    <li><a href="/admin/profiles/students">Senior</a></li>
                  </ul>
                </div>
                <!-- filter level end-->
                <!-- filter year -->
                <div class="btn-group">
                  <a aria-expanded="false" href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  Year
                  <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="/admin/profiles">All <i class="fa fa-check" aria-hidden="true"></i></a></li>
                    <li><a href="/admin/profiles/admins">2014-2015</a></li>
                    <li><a href="/admin/profiles/teachers">2015-2016</a></li>
                    <li><a href="/admin/profiles/students">2016-2017</a></li>
                  </ul>
                </div>
                <!-- filter year end-->
              </td>
            </tr>
        </thead>
        <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Students</th>
              <th>Teachers</th>
              <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($levels as $level)
        <tr>
          <td>{{$loop->index}}</td>
          <td>{{$level->name}}</td>
          <td>0</td>
          <td>0</td>
          <td class="list_users_action_container">
            <i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit user" aria-hidden="true"></i>
            <i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete user"  aria-hidden="true"></i>
          </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <div class="row flex">
        <div class="col-xs-10">
            <h4>Classes</h4>
        </div>
        <div class="col-xs-2 text-right">
          <div class="btn-group">
            <a aria-expanded="false" href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            Add Class
            <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
            <li><a href="/admin/add/teacher">Teacher</a></li>
            <li><a href="/admin/add/student">Student</a></li>
            <li><a href="/admin/add/parent">Parent</a></li>
            </ul>
          </div>
        </div>
    </div>
    <!-- classes table -->
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
              <td class="list_user_filters text-right" colspan="9">
                <!-- filter role -->
                <div class="btn-group">
                  <a aria-expanded="false" href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  Role
                  <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="/admin/profiles">All <i class="fa fa-check" aria-hidden="true"></i></a></li>
                    <li><a href="/admin/profiles/admins">Admins</a></li>
                    <li><a href="/admin/profiles/teachers">Teachers</a></li>
                    <li><a href="/admin/profiles/students">Students</a></li>
                    <li><a href="/admin/profiles/parents">Parents</a></li>
                  </ul>
                </div>
                <!-- filter role end-->
                <!-- filter level -->
                <div class="btn-group">
                  <a aria-expanded="false" href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  Level
                  <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="/admin/profiles">All <i class="fa fa-check" aria-hidden="true"></i></a></li>
                    <li><a href="/admin/profiles/admins">Pro Junior</a></li>
                    <li><a href="/admin/profiles/teachers">Junior</a></li>
                    <li><a href="/admin/profiles/students">Senior</a></li>
                  </ul>
                </div>
                <!-- filter level end-->
                <!-- filter year -->
                <div class="btn-group">
                  <a aria-expanded="false" href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  Year
                  <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="/admin/profiles">All <i class="fa fa-check" aria-hidden="true"></i></a></li>
                    <li><a href="/admin/profiles/admins">2014-2015</a></li>
                    <li><a href="/admin/profiles/teachers">2015-2016</a></li>
                    <li><a href="/admin/profiles/students">2016-2017</a></li>
                  </ul>
                </div>
                <!-- filter year end-->
              </td>
            </tr>
        </thead>
        <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Level</th>
              <th>Scholl Year</th>
              <th>Students</th>
              <th>Teachers</th>
              <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($classes as $class)
        <tr>
          <td>{{$loop->index}}</td>
          <td>{{$class['class']->name}}</td>
          <td>{{$levels[$class['class']->parent-1]->name}}</td>
          <td>{{$class->school_year}}</td>
          <td>0</td>
          <td>0</td>
          <td class="list_users_action_container">
            <i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit user" aria-hidden="true"></i>
            <i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete user"  aria-hidden="true"></i>
          </td>
        </tr>
        @endforeach
        </tbody>
    </table>

@endsection

@section('js')

<script>
  $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
  });
</script>

@endsection
