<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid d-flex justify-content-between">
        <a class="navbar-brand" href="{{route('loggify.view_tag')}}">
            <h4>Loggify</h4>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropend">
                    <a class="nav-link dropdown-toggle dropdown-center" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        General Information
                    </a>
                    <ul class="dropdown-menu" style="min-width: max-content">
                        <li class="px-2"><span>Total Keys: {{$information['db']['total_keys']}}</span></li>
                        <li class="px-2"><span>Expirable Keys: {{$information['db']['expirable_keys']}}</span></li>
                        <li class="px-2">
                            <hr class="dropdown-divider">
                        </li>
                        <li class="px-2"><span>Used Memory: {{$information['db']['used_memory']}}</span></li>
                        <li class="px-2"><span>Peak Used Memory: {{$information['db']['used_memory_peak']}}</span></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="px-2"><span>Redis Version: {{$information['db']['redis_version']}}</span></li>
                    </ul>
                </li>

                <li class="nav-item dropend">
                    <a class="nav-link dropdown-toggle dropdown-center" href="#" role="button" data-bs-toggle="modal"
                       data-bs-target="#tagsModal" aria-expanded="false">
                        Tags Information
                    </a>
                </li>
            </ul>
        </div>

        <div id="theme_switch_wrapper">
            <span id="light_icon" class="theme_switch d-none"><?xml version="1.0" encoding="utf-8"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.0//EN" "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                    <g><circle fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" cx="32.003" cy="32.005" r="16.001"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M12.001,31.997c0-2.211-1.789-4-4-4H4c-2.211,0-4,1.789-4,4
                            s1.789,4,4,4h4C10.212,35.997,12.001,34.208,12.001,31.997z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M12.204,46.139l-2.832,2.833c-1.563,1.562-1.563,4.094,0,5.656
                            c1.562,1.562,4.094,1.562,5.657,0l2.833-2.832c1.562-1.562,1.562-4.095,0-5.657C16.298,44.576,13.767,44.576,12.204,46.139z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M32.003,51.999c-2.211,0-4,1.789-4,4V60c0,2.211,1.789,4,4,4
                            s4-1.789,4-4l-0.004-4.001C36.003,53.788,34.21,51.999,32.003,51.999z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M51.798,46.143c-1.559-1.566-4.091-1.566-5.653-0.004
                            s-1.562,4.095,0,5.657l2.829,2.828c1.562,1.57,4.094,1.562,5.656,0s1.566-4.09,0-5.656L51.798,46.143z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M60.006,27.997l-4.009,0.008
                            c-2.203-0.008-3.992,1.781-3.992,3.992c-0.008,2.211,1.789,4,3.992,4h4.001c2.219,0.008,4-1.789,4-4
                            C64.002,29.79,62.217,27.997,60.006,27.997z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M51.798,17.859l2.828-2.829c1.574-1.566,1.562-4.094,0-5.657
                            c-1.559-1.567-4.09-1.567-5.652-0.004l-2.829,2.836c-1.562,1.555-1.562,4.086,0,5.649C47.699,19.426,50.239,19.418,51.798,17.859z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M32.003,11.995c2.207,0.016,4-1.789,4-3.992v-4
                            c0-2.219-1.789-4-4-4c-2.211-0.008-4,1.781-4,3.993l0.008,4.008C28.003,10.206,29.792,11.995,32.003,11.995z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M12.212,17.855c1.555,1.562,4.079,1.562,5.646-0.004
                            c1.574-1.551,1.566-4.09,0.008-5.649l-2.829-2.828c-1.57-1.571-4.094-1.559-5.657,0c-1.575,1.559-1.575,4.09-0.012,5.653
                            L12.212,17.855z"/></g></svg>
            </span>

            <span id="dark_icon" class="theme_switch"><?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.23129 2.24048C9.24338 1.78695 10.1202 2.81145 9.80357 3.70098C8.72924 6.71928 9.38932 10.1474 11.6193 12.3765C13.8606 14.617 17.3114 15.2755 20.3395 14.1819C21.2206 13.8637 22.2173 14.7319 21.7817 15.7199C21.7688 15.7491 21.7558 15.7782 21.7427 15.8074C20.9674 17.5266 19.7272 19.1434 18.1227 20.2274C16.4125 21.3828 14.3957 22.0001 12.3316 22.0001H12.3306C9.93035 21.9975 7.6057 21.1603 5.75517 19.6321C3.90463 18.1039 2.64345 15.9797 2.18793 13.6237C1.73241 11.2677 2.11094 8.82672 3.2586 6.71917C4.34658 4.72121 6.17608 3.16858 8.20153 2.25386L8.23129 2.24048Z" fill="#212529"/>
                </svg>
            </span>
        </div>
    </div>
</nav>

@include('loggify::components.tags_modal', ['information' => $information])
