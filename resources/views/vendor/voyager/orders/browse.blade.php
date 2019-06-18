@extends('voyager::bread.browse')

@section('page_header')
    @parent
    <div class='container-fluid'>
        <form>
            <div class='form-group pull-right'>
                    <input class='csv' type='file' name='filename'/>
                    <button class='btn btn-info'><i class='voyager-upload'></i> Upload CSV</button>
            </div>
        </form>
    </div>
@stop
