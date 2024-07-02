<section class="hero-section">
    <h1 class="mb-5">Project looking <span>for...</span></h1>
    <div class="search-block col-md-8">
        <input type="text" placeholder="What Type Of Work You Need ?" maxlength="250" name="title" id="titleInput"/>
        <a href="#" class="search-btn" onclick="submitTitle()">Find</a>
    </div>
</section>

<script>
    function submitTitle() {
        const titleValue = document.getElementById('titleInput').value;
        const route = "{{route('find.project')}}";
        window.location.href = `${route}?title=${encodeURIComponent(titleValue)}&type=frontend`;
    }
</script>
