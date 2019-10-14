<ul>
    @foreach($comments as $comment)
        @if($parent === (int) $comment->parent_id)
            <li class="list-unstyled">
                    <div class="alert alert-success" role="alert">
                        <h5>{{ $comment->name }}</h5>
                        {{ $comment->message }}
                    
                
                <?php if ($comment->level < env('MAX_NESTED', 2)) { ?>
                    <div class="col-md-12">
                        <div>
                            <a href="#" cid="{{ $comment->id }}" aid="{{ $comment->article_id }}" lvl="{{ $comment->level }}" token="{{ csrf_token() }}" class="alert-link reply-to-reply">Comment</a>
                        </div>
                        <div class="reply-to-reply-form">
                            <!-- Dynamic Reply form -->
                        </div>
                    </div>
                <?php } ?>
                </div>
                
                @include('comments', ['comments' => $comments, 'parent' => (int) $comment->id])
            </li>
        @endif
    @endforeach
</ul>
