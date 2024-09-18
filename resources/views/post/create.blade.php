<x-app-layout>
    <div class="post-container single-post">
        <form action="{{ route('post.store') }}" method="POST" class="post">
            @csrf
            <textarea name="post" rows="10" class="post-body" placeholder="Enter your post here"></textarea>
            <div class="post-buttons">
                <a href="{{ route('post.index') }}" class="post-cancel-button">Cancel</a>
                <button class="post-submit-button">Submit</button>
            </div>
        </form>
    </div></x-app-layout>
