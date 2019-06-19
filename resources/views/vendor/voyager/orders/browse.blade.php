@extends('voyager::bread.browse')

@section('page_header')
    @parent
    <div class='container-fluid'>
        <form action="{{route('import_csv')}}" method="post" enctype="multipart/form-data">
            <div class='form-group pull-right'>
                    {{csrf_field()}}
                    <input class='csv' type='file' name='csv-file'/>
                    <button type='submit' class='btn btn-info'><i class='voyager-upload'></i> Upload CSV</button>
            </div>
        </form>
    </div>
@stop
