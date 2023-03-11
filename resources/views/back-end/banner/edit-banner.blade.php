@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@push('css')
@endpush

@section('page-content')
    <div class="card">
        <div class="card-header bg-info">
            <h2 class="text-center">Edit Banner</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('edit_banner', $banner_image->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="" class="col-form-label">Picture:</label>
                    <img class="cropper-img"  id="image">
                    <div class="cropper-preview">
                        <img src="{{ asset('storage/' . $banner_image->image_path) }}" class="w-100 img-fluid">
                    </div>
                    <input type="file" class="form-control" name="image" id="bannerInput" required>
                    <input type="hidden" name="en_image" id="bannerOutput">
                </div>
                <div class="text-center mt-4">
                    <button type="button" class="btn btn-success btn-round waves-effect waves-light" id="upload-banner">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('js')
<script>
    var image = document.getElementById('image');
    var cropper, reader, file;

    $("#bannerInput").on("change", function(e) {
        var files = e.target.files;
        var done = function(url) {
            image.src = url;
        };

        if (files && files.length > 0) {
            file = files[0];

            if (URL) {
                done(URL.createObjectURL(file));
            } else if (FileReader) {
                reader = new FileReader();
                reader.onload = function(e) {
                    done(reader.result);
                };
                reader.readAsDataURL(file);
            }
        }

        cropper = new Cropper(image, {
            aspectRatio: 16 / 3,
            viewMode: NaN,
            preview: '.cropper-preview'
        });
    });

    $("#upload-banner").click(function() {
        if (cropper) {
            canvas = cropper.getCroppedCanvas({
                width: NaN,
                height: NaN,
            });

            canvas.toBlob(function(blob) {
                url = URL.createObjectURL(blob);
                var reader = new FileReader();
                reader.readAsDataURL(blob);
                reader.onloadend = function() {
                    var base64data = reader.result;
                    $('#bannerOutput').val(base64data);

                    $('form').submit();
                }
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Select an image!',
            })
        }
    });
</script>
@endpush
