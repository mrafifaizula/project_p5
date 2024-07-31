<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ __('ds') }}</a>
            <a href="#" class="simple-text logo-normal">{{ __('data sekolah') }}</a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug == 'dashboard') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'table') class="active " @endif>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="tim-icons icon-bullet-list-67" ></i>
                    <span class="nav-link-text" >{{ __('Table') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'eskul') class="active " @endif>
                            <a href="{{ route('eskul.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('Eskul') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'fasilitas') class="active " @endif>
                            <a href="{{ route('fasilitas.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('Fasilitas') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'jurusan') class="active " @endif>
                            <a href="{{ route('jurusan.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('Jurusan') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'informasi') class="active " @endif>
                            <a href="{{ route('informasi.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('Informasi') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'industri') class="active " @endif>
                            <a href="{{ route('industri.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('Industri') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- <li @if ($pageSlug == 'notifications') class="active " @endif>
                <a href="{{ route('pages.notifications') }}">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>{{ _('Notifications') }}</p>
                </a>
            </li> --}}
            <li @if ($pageSlug == 'profile') class="active " @endif>
                <a href="{{ route('profile.edit')  }}">
                    <i class="tim-icons icon-single-02"></i>
                    <p>{{ __('User Profile') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'notifications') class="active " @endif>
        </ul>
    </div>
</div>
