<a class="btn btn-success" id="bulk_print_btn"><i class="voyager-tag"></i> <span>Bulk Print Note</span></a>

{{-- Bulk print modal --}}
<div class="modal modal-success fade" tabindex="-1" id="bulk_print_modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">
                    <i class="voyager-trash"></i> Are you sure you want to print these <span id="bulk_print_count"></span> <span id="bulk_print_display_name"></span>?
                </h4>
            </div>
            <div class="modal-body" id="bulk_print_modal_body">
            </div>
            <div class="modal-footer">
                <form action="{{ route('voyager.'.$dataType->slug.'.index') }}/0" id="bulk_print_form" method="POST">
                    {{ method_field("print") }}
                    {{ csrf_field() }}
                    <input type="hidden" name="ids" id="bulk_print_input" value="">
                    <input type="submit" class="btn btn-success pull-right print-confirm"
                             value="Yes, Print These {{ strtolower($dataType->display_name_plural) }}">
                </form>
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">
                    {{ __('voyager::generic.cancel') }}
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
var prev_handler = window.onload;
window.onload = function () {
    if (prev_handler) {
        prev_handler();
    }

    // Bulk print selectors
    var $bulkprintBtn = $('#bulk_print_btn');
    var $bulkprintModal = $('#bulk_print_modal');
    var $bulkprintCount = $('#bulk_print_count');
    var $bulkprintDisplayName = $('#bulk_print_display_name');
    var $bulkprintInput = $('#bulk_print_input');
    // Reposition modal to prevent z-index issues
    $bulkprintModal.appendTo('body');
    // Bulk print listener
    $bulkprintBtn.click(function () {
        var ids = [];
        var $checkedBoxes = $('#dataTable input[type=checkbox]:checked').not('.select_all');
        var count = $checkedBoxes.length;
        if (count) {
            // Reset input value
            $bulkprintInput.val('');
            // Deletion info
            var displayName = count > 1 ? '{{ $dataType->display_name_plural }}' : '{{ $dataType->display_name_singular }}';
            displayName = displayName.toLowerCase();
            $bulkprintCount.html(count);
            $bulkprintDisplayName.html(displayName);
            // Gather IDs
            $.each($checkedBoxes, function () {
                var value = $(this).val();
                ids.push(value);
            })
            // Set input value
            $bulkprintInput.val(ids);
            // Show modal
            $bulkprintModal.modal('show');
        } else {
            // No row selected
            toastr.warning("You haven't selected anything to print");
        }
    });
}
</script>
