 <nav class="navbar-vertical navbar ">
            <div class="nav-scroller ">
                <!-- Brand logo -->
                <a class="navbar-brand" href="{{route('dashboard')}}">
                    <img src="assets/images/rkuw.png" alt="" />
                </a>
                <!-- Navbar nav -->
                <ul class="navbar-nav flex-column" id="sideNavbar">
                    <li class="nav-item">
                        <a class="nav-link" id="dashboard" style="color: white ;" href="{{route('dashboard')}}">
                            <i class="nav-icon fe fe-home me-2"></i> Dashboard
                        </a>

                    </li>

                    <li class="nav-item" id="ug" hidden>
                        <a class="nav-link collapsed" style="color: white ;" href="{{ route('stu.addcousrse',['id' => 1]) }}">
                            <i class="nav-icon fe fe-book me-2"></i> Under Graduate Programs
                        </a>

                    </li>
                    <li class="nav-item" id="pg" hidden>
                        <a class="nav-link   collapsed " style="color: white ;" href="{{ route('stu.addcousrse',['id' => 2]) }}">
                            <i class="nav-icon fe fe-book me-2"></i> Post Graduate Programs
                        </a>

                    </li>
                    <li class="nav-item" id="diploma" hidden>
                        <a class="nav-link   collapsed " style="color: white ;" href="{{ route('stu.addcousrse',['id' => 3]) }}">
                            <i class="nav-icon fe fe-book me-2"></i> Diploma Programs
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed " style="color: white ;" id="test" href="{{route('test')}}">
                            <i class="nav-icon fe fe-book me-2"></i> Test
                        </a>
                    </li>
                    <li class="nav-item">
                        <div class="nav-divider"></div>
                    </li>

                </ul>
            </div>
        </nav>