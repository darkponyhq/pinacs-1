@extends('layouts.main')

@section('head')
<link rel="stylesheet" type="text/css" href="/css/datepicker.css">
@stop

@section('content')
    <form method="GET" action="/admin/homework/edit">
        <div class="form-group">
            <label class="control-label col-xs-2" for="">Starting date</label>
            <div class="input-group date col-xs-4" id="" data-date="{{explode(' ',$homework->start_date)[0]}}" data-date-format="yyyy-mm-dd">
                <input id="starting_date" name="starting_date" class="form-control" data-date-format="yyyy-mm-dd" type="text" readonly="" value="{{explode(' ',$homework->start_date)[0]}}" required>
                <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i>
                </span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-2" for="">Due date</label>
            <div class="input-group date col-xs-4" id="" data-date="{{explode(' ',$homework->due_date)[0]}}" data-date-format="yyyy-mm-dd">
                <input id="ending_date" name="ending_date" class="form-control" data-date-format="yyyy-mm-dd" type="text" readonly="" value="{{explode(' ',$homework->due_date)[0]}}" required>
                <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i>
                </span>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-xs-2">
                    <label class="control-label" for="">State</label>
                </div>
                <div class="col-xs-8">
                    @if($homework->state==='active')
                        <label class="radio-inline"><input type="radio" name="state" value="active" checked>Active</label>
                        <label class="radio-inline"><input type="radio" name="state" value="inactive">Inactive</label>
                    @else
                        <label class="radio-inline"><input type="radio" name="state" value="active">Active</label>
                        <label class="radio-inline"><input type="radio" name="state" value="inactive" checked>Inactive</label>
                    @endif
                </div>
            </div>
        </div>
        <div class="form-group">
            <textarea name="text">{{$homework['homework']->text}}</textarea>
        </div>
        <input type="hidden" name="id" value="{{$homework->id}}">
        <input type="hidden" name="class_index" value="{{$class_index}}">
        <div class="form-group">
            <div class="col-xs-5 col-xs-offset-7 text-right">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>

@stop

@section('js')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({
        content_css : '/css/content.css',
        selector:'textarea',
        plugins: "textcolor",
        toolbar: ['bold, italic, underline, strikethrough, alignleft, aligncenter, alignright, alignjustify, fontselect, fontsizeselect, bullist, numlist,  undo, redo,forecolor backcolor']
    });
    </script>
    <script src="/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript">
        var starting = $('#starting_date').datepicker();
        var ending = $('#ending_date').datepicker();
    </script>
@stop
