@extends('voyager::bread.browse')

@section('page_header')
    @parent
    <div class='container-fluid'>
        <form class='inline-block pull-right' action="{{route('import_csv')}}" method="post" enctype="multipart/form-data">
            <div class='form-group'>
                    {{csrf_field()}}
                    <input class='csv' type='file' name='csv-file'/>
                    <button type='submit' class='btn btn-info'><i class='voyager-upload'></i> Upload CSV</button>
            </div>
        </form>

        @include('partials.bulk-print-note')
    </div>
@stop

@section('javascript')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jeditable.js/2.0.10/jquery.jeditable.min.js"></script> --}}
@stop