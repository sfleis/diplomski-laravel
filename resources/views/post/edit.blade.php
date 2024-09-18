<x-app-layout>
    <div class="post-container single-post">
        <h1 class="text-3xl py-4">Edit your post</h1>
        <form action="{{ route('post.update', $post) }}" method="POST" class="note">
            @csrf
            @method('PUT')
            <textarea name="post" rows="10" class="post-body" placeholder="Enter your post it here">{{ $post->post }}</textarea>
            <div class="post-buttons">
                <a href="{{ route('post.index') }}" class="post-cancel-button">Cancel</a>
                <button class="post-submit-button">Submit</button>
            </div>
        </form>
    </div></x-app-layout>
