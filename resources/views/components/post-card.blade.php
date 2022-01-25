<div class="card mb-3" style="width: 600px; max-width: 100%;">
    <div class="card-header bg-white border-0"><i class="bi bi-person-circle fs-5 me-2"></i><span class="fw-bold">{{ $user->name }}</span></div>
    <img src="{{ asset($post->image) }}" class="card-img rounded-0" alt="post-image">
    <div class="card-body">
        <p class="card-text"><span class="fw-bold">{{ $user->name }}</span> {{ $post->description }}</p>
    </div>
    <form action="/posts/comments/{{ $post->id }}" method="post">
        <div class="input-group">
            <input class="form-control border-0" name="comment" placeholder="Adicione um comentário..." style="box-shadow: none;">
            <button class="btn btn-link text-decoration-none" type="submit" style="box-shadow: none;">Publicar</button>
          </div>
    </form>
</div>