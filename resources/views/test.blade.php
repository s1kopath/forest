@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@push('css')
    <style>
        .hidden {
            display: none;
        }

        svg {
            width: 20px;
            height: 20px;
            margin-right: 7px;
        }

        button,
        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            height: auto;
            padding-top: 8px;
            padding-bottom: 8px;
            color: #777;
            text-align: center;
            font-size: 14px;
            font-weight: 500;
            line-height: 1.1;
            letter-spacing: 2px;
            text-transform: capitalize;
            text-decoration: none;
            white-space: nowrap;
            border-radius: 4px;
            border: 1px solid #ddd;
            cursor: pointer;
        }

        button:hover,
        .button:hover {
            border-color: #cdd;
        }

        .share-button,
        .copy-link {
            padding-left: 30px;
            padding-right: 30px;
        }

        .share-button,
        .share-dialog {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .share-dialog {
            display: none;
            width: 95%;
            max-width: 500px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, .15);
            z-index: -1;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 4px;
            background-color: #fff;
        }

        .share-dialog.is-open {
            display: block;
            z-index: 2;
        }

        header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .targets {
            display: grid;
            grid-template-rows: 1fr 1fr;
            grid-template-columns: 1fr 1fr;
            grid-gap: 20px;
            margin-bottom: 20px;
        }

        .close-button {
            background-color: transparent;
            border: none;
            padding: 0;
        }

        .close-button svg {
            margin-right: 0;
        }

        .link {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            border-radius: 4px;
            background-color: #eee;
        }

        .pen-url {
            margin-right: 15px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    </style>
@endpush
@section('page-content')
    <p></p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <p><button id="btn">Share MDN!</button></p>
    <p class="result"></p>
@endsection

@push('js')
    <script>
        const shareData = {
            title: "MDN",
            url: "https://developer.mozilla.org",
        };

        const btn = document.querySelector("#btn");
        const resultPara = document.querySelector(".result");

        // Share must be triggered by "user activation"
        btn.addEventListener("click", async () => {
            console.log('clicked');
            try {
                await navigator.share(shareData);
                resultPara.textContent = "MDN shared successfully";
            } catch (err) {
                resultPara.textContent = `Error: ${err}`;
            }
        });
    </script>
@endpush
