<nav class="navbar navbar-main navbar-expand-lg px-0 mx-0 shadow-none border-radius-xl " id="navbarBlur"
    data-scroll="false">
    <div class="container-fluid py-1">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm- me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="/">{{ $title }}</a></li>
                <li class="breadcrumb-item text-sm text-white active" aria-current="page">{{ $subtitle }}</li>
            </ol>
            <h6 class="font-weight-bolder text-white mb-0">{{ $subtitle }}</h6>
        </nav>

        <div class="d-flex justify-content-end" id="navbar">
                <form action="/pengampu" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari ..." name="search">
                        <button class="btn btn-tumblr mb-0" type="submit">Search</button>
                    </div>
                </form>
        </div>
    </div>
</nav>
