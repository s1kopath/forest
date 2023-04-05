<div class="d-flex justify-content-center">
    <button type="button" class="btn btn-primary rounded-pill mb-3 mr-1" onclick="myFunction()"
        id="copied">
        <i class="far fa-copy"></i>
        Copy
    </button>
    <button class="btn btn-primary rounded-pill mb-3 d-block d-lg-none" id="share-btn">
        <i class="fas fa-share-alt"></i>
        Share
    </button>
    <button class="btn btn-primary rounded-pill mb-3 d-none d-lg-block" data-toggle="modal"
        data-target="#shareModal">
        <i class="fas fa-share-alt"></i>
        Share
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="shareModal" tabindex="-1" role="dialog"
    aria-labelledby="shareModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="ml-3 a2a_kit a2a_kit_size_32 a2a_default_style">
                    <a class="a2a_button_email"></a>
                    <a class="a2a_button_facebook"></a>
                    <a class="a2a_button_facebook_messenger"></a>
                    <a class="a2a_button_linkedin"></a>
                    <a class="a2a_button_twitter"></a>
                    <a class="a2a_button_telegram"></a>
                    <a class="a2a_button_whatsapp"></a>
                    <a class="a2a_button_pinterest"></a>
                    <a class="a2a_button_reddit"></a>
                    <a class="a2a_button_tumblr"></a>
                    <a class="a2a_button_blogger"></a>
                    <button type="button" class="btn btn-sm btn-secondary rounded-lg"
                        data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


@push('js')
    <script async src="https://static.addtoany.com/menu/page.js"></script>
    <script>
        var url = $("#referral-link").text();
        var title = "Share Invite Link";
        a2a_config = {
            linkurl: url,
            title: title
        };

        a2a.init('page');
    </script>

    <script>
        function myFunction() {
            // Get the text field
            var copyText = $("#referral-link").text();

            copyText = copyText.trim();

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText);

            $('#copied').html('✔️ Copied');
            $('#copied').addClass('bg-success');
        }
    </script>

    <script>
        const shareData = {
            title: "Invite Link",
            url: $("#referral-link").text(),
        };

        const btn = document.querySelector("#share-btn");

        // Share must be triggered by "user activation"
        btn.addEventListener("click", async () => {
            try {
                await navigator.share(shareData);
            } catch (err) {
                alert(err);
            }
        });
    </script>
@endpush
