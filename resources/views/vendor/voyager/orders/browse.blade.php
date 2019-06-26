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
    @parent
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jeditable.js/2.0.10/jquery.jeditable.min.js"></script>
    {{-- <script>
        $(document).ready(function() {
            var id = $(this).closest('tr').find('td:nth-child(2)').text();
            console.log(id);
            $('tr td:nth-child(3)').editable('/admin/orders/set_third_party_receipt_number',
            {
                name : 'third_party_receipt_number',
                submitdata : {
                    value : 3,
                },
            });
        });
    </script> --}}
@stop