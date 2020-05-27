<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">

    <div class="c-sidebar-brand">
        <img class="c-sidebar-brand-full" src="{{ asset('assets/brand/coreui-pro-base-white.svg') }}" width="118"
             height="46" alt="CoreUI Logo">
        <img class="c-sidebar-brand-minimized" src="{{ asset('assets/brand/coreui-signet-white.svg') }}" width="118"
             height="46" alt="CoreUI Logo">
    </div>

    <ul class="c-sidebar-nav" data-drodpown-accordion="true">

        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('home') }}">
                <i class="cil-speedometer c-sidebar-nav-icon"></i>
                Dashboard<span class="badge badge-info">NEW</span>
            </a>
        </li>

        @canany(['students_manage','lecturers_manage','staffs_manage','departments_manage','roles_manage'])
            <li class="c-sidebar-nav-title">Master</li>

            @canany(['students_manage','lecturers_manage','staffs_manage'])
                <li class="c-sidebar-nav-dropdown">
                    <a class="c-sidebar-nav-dropdown-toggle" href="/#">
                        <i class="cil-user c-sidebar-nav-icon"></i>
                        Sivitas
                    </a>
                    <ul class="c-sidebar-nav-dropdown-items">

                        @can('students_manage')
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link" href="{{ route('backend.students.index') }}">
                                    <i class="c-sidebar-nav-icon"></i>
                                    Mahasiswa
                                </a>
                            </li>
                        @endcan

                        @can('lecturers_manage')
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link" href="{{ route('backend.lecturers.index') }}">
                                    <i class="c-sidebar-nav-icon"></i>
                                    Dosen
                                </a>
                            </li>
                        @endcan

                        @can('staffs_manage')
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link" href="{{ route('backend.staffs.index') }}">
                                    <i class="c-sidebar-nav-icon"></i>
                                    Tendik
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcanany

            @can('roles_manage')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link" href="{{ route('backend.roles.index') }}">
                        <i class="cil-user-follow c-sidebar-nav-icon"></i>
                        Role / Permission
                    </a>
                </li>
            @endcan

            @can('departments_manage')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link" href="{{ route('backend.departments.index') }}">
                        <i class="cil-bank c-sidebar-nav-icon"></i>
                        Prodi / Jurusan
                    </a>
                </li>
            @endcan

            @can('rooms_access')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link" href="{{ route('backend.rooms.index') }}">
                        <i class="cil-building c-sidebar-nav-icon"></i>
                        Ruangan
                    </a>
                </li>
            @endcan
        @endcanany

        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('frontend.myintern-proposals.index') }}">
                <i class="cil-address-book c-sidebar-nav-icon"></i>
                Proposal KP
            </a>
        </li>

        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('backend.interns.index') }}">
                <i class="cil-bank c-sidebar-nav-icon"></i>
                Mahasiswa KP
            </a>
        </li>

    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
            data-class="c-sidebar-unfoldable"></button>
</div>
