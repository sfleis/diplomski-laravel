<x-app-layout>
    <div class="post-container single-post">
        <div class="post-header">
            <div class="post-buttons">
                <a href="{{ route('post.edit', $post) }}" class="post-edit-button">Edit</a>
                <form action="{{ route('post.destroy', $post) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="post-delete-button">Delete</button>
                </form>
            </div>
        </div>
        <div class="post">
            <div class="post-body">
                {{ $post->post }}
            </div>
        </div>
        
        <!-- Back to All Post-its button -->
        <a href="{{ route('post.index') }}" class="back-home-btn">
            Back to All Post-its
        </a>
    </div>
</x-app-layout>
