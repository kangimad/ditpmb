<nav class="navbar navbar-expand-md fixed-top navbar-dark shadow-sm" style="background-color: rgb(52, 148, 232)">
    <div class="container">
        <a class="navbar-brand" href="/">
            <p class="h5 mb-0">Sastra Shastri Blog</p>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link . {{ $active === 'Home' ? 'active' : '' }}" aria-current="page"
                        href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link . {{ $active === 'About' ? 'active' : '' }}" aria-current="page"
                        href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link . {{ $active === 'Postingan' ? 'active' : '' }}" aria-current="page"
                        href="/postingan">Postingan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link . {{ $active === 'Kategori' ? 'active' : '' }}" aria-current="page"
                        href="/kategori">Kategori</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
