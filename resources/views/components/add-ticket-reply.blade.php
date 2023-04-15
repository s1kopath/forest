<div class="card">
    <div class="card-header">
        <h5 class="text-dark">
            Add Reply
        </h5>
    </div>
    <div class="card-body">
        <form action="{{ $details['route_name'] }}" method="post" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="ticket_id" value="{{ $details['ticket_id'] }}">
            <fieldset class="form-group p-2 rounded ms-fieldset">
                <legend class="w-auto px-2 ms-legend">Description</legend>

                <textarea class="form-control" name="reply_description" cols="30" rows="5" placeholder="Write in details..."
                    style="border: none; outline: 0;"></textarea>
            </fieldset>
            <hr>
            <div class="d-flex justify-content-between">
                <fieldset class="form-group p-2 rounded ms-fieldset">
                    <legend class="w-auto px-2 ms-legend">Upload Attachment <i class="fa fa-upload ms-2"></i></legend>
                    <input type="file" class="form-control ms-input" name="reply_image">
                </fieldset>
                <div class="text-right m-1 pt-2">
                    <button type="submit" class="uk-button uk-button-primary">
                        SUBMIT
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
