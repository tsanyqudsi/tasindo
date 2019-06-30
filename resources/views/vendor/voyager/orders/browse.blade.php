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
    <script>
        $(document).ready(function() {
            //need to be simplified
            dropshipIndex = ($('th:contains("Resi Pengiriman Pihak Ketiga")').index())+1;
            dropshipIndex = 'tr td:nth-child('+dropshipIndex+')';
            
            adminIndex = ($('th:contains("Resi Pengiriman Admin")').index())+1;
            adminIndex = 'tr td:nth-child('+adminIndex+')';

            statusIndex = ($('th:contains("Status Pengiriman")').index())+1;

            $(dropshipIndex+","+adminIndex).on('click',function(){
                id_value = $(this).siblings(':first').children().val();
                th_value = $(this).closest('table').find('th').eq($(this).index()).text().trim();
            });

            $(adminIndex).on('change',function(){
                $(this).siblings(':nth-child('+statusIndex+')').text('test');
            });

            $(dropshipIndex+","+adminIndex).editable('/admin/orders/editable',
            {
                name : 'value',
                cancel : 'Cancel',
                submit : 'Save',
                cancelcssclass : 'btn btn-danger',
                submitcssclass : 'btn btn-success margin-right-1',
                inputcssclass : 'form-control input-sm',
                onblur : 'ignore',
                data: function(string) {return $.trim(string)},
                tooltip : 'Click to Edit',
                submitdata : {
                    id : function(){
                        return id_value;
                    },
                    name : function(){
                        return th_value;
                    }
                },
            });
        });
    </script>
@stop
