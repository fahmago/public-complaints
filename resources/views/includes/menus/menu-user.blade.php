<li
    class="sidebar-item {{Route::currentRouteName()==='user.index' ? ''}}">
    <a href="index.html" class='sidebar-link'>
        <i class="bi bi-grid-fill"></i>
        <span>Dashboard</span>
    </a>
</li>

<li
    class="sidebar-item">
    <a href="{{route('front.form.pengaduan')}}" class='sidebar-link'>
        <i class="bi bi-grid-fill"></i>
        <span>Ajukan Pengaduan</span>
    </a>
</li>

<li
    class="sidebar-item">
    <a href="{{route('user.riwayat.pengaduan')}}" class='sidebar-link'>
        <i class="bi bi-clock-history"></i>
        <span>Riwayat Pengaduan</span>
    </a>
</li>