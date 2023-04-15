<div class="card">
    <div class="card-header">
        <h6 class="text-dark">
            @if ($reply->reply_by == 'support')
                Support
            @else
                You
            @endif
            <small class="text-muted">({{ $reply->created_at->diffForHumans() }})</small>
        </h6>
    </div>
    <div class="card-body">
        <div>
            <p>
                {{ $reply->text }}
            </p>
        </div>
        @if ($reply->image)
            <hr>
            <h6>Attachment:
                <a href="{{ $reply->img }}" class="edit-icon py-1 ml-2" title="Download">
                    Download
                    <i class="fa fa-download ms-2"></i>
                </a>
            </h6>
        @endif
    </div>
</div>
