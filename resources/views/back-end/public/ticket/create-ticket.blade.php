@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@push('css')
@endpush

@section('page-title', 'Create Ticket')

@section('page-content')
    <div class="card">
        <div class="card-block">
            <div class="text-right m-1">
                <a href="{{ route('user_support_ticket') }}" class="uk-button uk-button-danger">
                    Go Back
                </a>
            </div>

            <form action="{{ route('create_user_support_ticket') }}" method="post" enctype="multipart/form" class="mx-1">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <fieldset class="form-group p-2 rounded ms-fieldset">
                            <legend class="w-auto px-2 ms-legend">Subject</legend>
                            <input class="form-control ms-input" type="text" name="subject"
                                placeholder="Enter a subject..." required>
                        </fieldset>
                    </div>
                    <div class="col-md-6">
                        <fieldset class="form-group p-2 rounded ms-fieldset">
                            <legend class="w-auto px-2 ms-legend">Upload Screenshot (optional)</legend>
                            <input type="file" class="form-control ms-input" id="v3_img_input">
                        </fieldset>
                    </div>
                    <div class="col-md-12">
                        <fieldset class="form-group p-2 rounded ms-fieldset">
                            <legend class="w-auto px-2 ms-legend">Describe the Problem</legend>

                            <textarea class="form-control" name="details" cols="30" rows="10" placeholder="Write in details..."
                                style="border: none; outline: 0;"></textarea>
                        </fieldset>
                    </div>
                    <div class="col-md-10">
                        <img class="cropper-img" id="image_3">
                        <div class="cropper-preview-1" style="overflow: hidden">
                        </div>
                        <input type="hidden" name="screenshot" id="screenshot_input">
                    </div>
                </div>

                <div class="text-center m-t-20 m-b-20">
                    <button type="button" onclick="submitTicket()" class="uk-button uk-button-primary">
                        SUBMIT
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('js')
    <script>
        var image_3 = document.getElementById('image_3');
        var cropper3, reader3, file3;

        $("#v3_img_input").on("change", function(e) {
            var files3 = e.target.files;
            var done3 = function(url) {
                image_3.src = url;
            };

            if (files3 && files3.length > 0) {
                file3 = files3[0];

                if (URL) {
                    done3(URL.createObjectURL(file3));
                } else if (FileReader3) {
                    reader3 = new FileReader();
                    reader3.onload = function(e) {
                        done3(reader3.result);
                    };
                    reader3.readAsDataURL(file3);
                }
            }

            cropper3 = new Cropper(image_3, {
                aspectRatio: NaN,
                viewMode: 1 / 1,
                preview: '.cropper-preview-1'
            });
        });

        function submitTicket() {
            if (cropper3) {
                canvas3 = cropper3.getCroppedCanvas({
                    width: NaN,
                    height: NaN,
                });

                canvas3.toBlob(function(blob3) {
                    url2 = URL.createObjectURL(blob3);
                    var reader3 = new FileReader();
                    reader3.readAsDataURL(blob3);
                    reader3.onloadend = function() {
                        let base_data_3 = reader3.result;

                        $('#screenshot_input').val(base_data_3);
                        $("form").submit();
                    }
                });
            } else {
                $("form").submit();
            }
        };
    </script>
@endpush
