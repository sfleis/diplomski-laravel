<x-app-layout>
    <div class="post-container py-12">
        <a href="{{ route('post.create') }}" class="new-post-btn">
            New Post-it
        </a>
        <div class="posts">
            @foreach ($posts as $post)
                <div class="post">
                    <div class="post-body">
                        {{ Str::words($post->post, 5) }}
                    </div>
                    <div class="post-buttons">
                        <a href="{{ route('post.show', $post) }}" class="post-edit-button">View</a>
                        <a href="{{ route('post.edit', $post) }}" class="post-edit-button">Edit</a>
                        <form action="{{ route('post.destroy', $post) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="post-delete-button">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="p-6">
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>