    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger background-danger">
                <button type="button" class="close m-0" data-dismiss="alert" aria-label="Close">
                    <i class="icofont icofont-close-line-circled text-white"></i>
                </button>
                <strong>{{ $error }}</strong>
            </div>
        @endforeach
    @endif

    @if (session()->has('message'))
        <div class="alert alert-success background-success">
            <button type="button" class="close m-0" data-dismiss="alert" aria-label="Close">
                <i class="icofont icofont-close-line-circled text-white"></i>
            </button>
            <strong>{{ session('message') }}</strong>
        </div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger background-danger">
            <button type="button" class="close m-0" data-dismiss="alert" aria-label="Close">
                <i class="icofont icofont-close-line-circled text-white"></i>
            </button>
            <strong>{{ session('error') }}</strong>
        </div>
    @endif
    @if (session()->has('warning'))
        <div class="alert alert-warning background-warning">
            <button type="button" class="close m-0" data-dismiss="alert" aria-label="Close">
                <i class="icofont icofont-close-line-circled text-white"></i>
            </button>
            <strong>{{ session('warning') }}</strong>
        </div>
    @endif
