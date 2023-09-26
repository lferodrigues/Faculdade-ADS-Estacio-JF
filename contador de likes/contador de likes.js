 <script>
        const likeButton = document.getElementById("like-button");
        const likeCount = document.getElementById("like-count");
        let likes = 0;
        let liked = false;

        likeButton.addEventListener("click", () => {
            if (!liked) {
                liked = true;
                likeButton.classList.add("liked");
                likes++;
            } else {
                liked = false;
                likeButton.classList.remove("liked");
                likes--;
            }

            likeCount.textContent = likes;
        });
    </script>