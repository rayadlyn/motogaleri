<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data Post - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: #6A6A6A;">

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded" style="background: #393939;">
                    <div class="card-body">
                        <img src="{{ asset('storage/posts/'.$post->image) }}" class="w-100 rounded mb-4">
                        <h4 style="color: #000;">{{ $post->title }}</h4>
                        <p style="color: #000;">{!! $post->content !!}</p>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <button onclick="likePost()" id="likeButton" class="btn btn-success">Like</button>
                                <button onclick="unlikePost()" id="unlikeButton" style="display: none;" class="btn btn-danger">Unlike</button>
                            </div>
                            <div>
                                <button onclick="showComments()" class="btn btn-primary mr-2">Komentar</button>
                                <button onclick="goBack()" class="btn btn-secondary">Kembali</button>
                            </div>
                        </div>
                        <div id="commentsSection" style="display: none;">
                            <hr>
                            <h5 style="color: #fff;">Komentar</h5>
                            <ul id="commentsList" class="list-unstyled">
                                <!-- List of comments will be displayed here -->
                            </ul>
                            <textarea id="commentInput" class="form-control mt-3" placeholder="Tulis komentar"></textarea>
                            <button onclick="addComment()" class="btn btn-primary mt-2">Kirim</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        var isLiked = false;

        function likePost() {
            isLiked = true;
            updateLikeButtons();
            // Logic to handle liking the post and updating the like count can be added here
            alert('Post liked!');
        }

        function unlikePost() {
            isLiked = false;
            updateLikeButtons();
            // Logic to handle unliking the post and updating the like count can be added here
            alert('Post unliked!');
        }

        function showComments() {
            var commentsSection = document.getElementById('commentsSection');
            if (commentsSection.style.display === 'none') {
                commentsSection.style.display = 'block';
                // Logic to fetch and display comments can be added here
            } else {
                commentsSection.style.display = 'none';
            }
        }

        function addComment() {
            var commentInput = document.getElementById('commentInput');
            var comment = commentInput.value;
            // Logic to handle adding comment and displaying it can be added here
            var commentsList = document.getElementById('commentsList');
            var newComment = document.createElement('li');
            newComment.textContent = comment;
            commentsList.appendChild(newComment);
            commentInput.value = '';
        }

        function updateLikeButtons() {
            var likeButton = document.getElementById('likeButton');
            var unlikeButton = document.getElementById('unlikeButton');
            if (isLiked) {
                likeButton.style.display = 'none';
                unlikeButton.style.display = 'block';
            } else {
                likeButton.style.display = 'block';
                unlikeButton.style.display = 'none';
            }
        }

        function goBack() {
            window.history.back();
        }
    </script>
    
</body>

</html>
